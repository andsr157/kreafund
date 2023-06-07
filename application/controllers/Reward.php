<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reward extends CI_Controller
{

	public function add()
	{
		$this->form_validation->set_rules('rtitle', 'Rtitle', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$response = array(
				'status' => 'error',
				'message' => 'Validation Error',
				'errors' => $errors
			);
			echo json_encode($response);
		} else {
			$post = $this->input->post(null, true);
			$params['title'] = $post['rtitle'];
			$params['amount'] = $post['amount'];
			$params['image'] = 'default.jpg';
			$params['description'] = $post['desc'];
			$params['est_delivery'] = $post['month'] . "/" . $post['year'];
			$params['project_id'] = $post['project_id'];
			if (isset($post['unlimited'])) {
				$params['qty'] = $post['unlimited'];
			} else if (isset($post['limited'])) {
				$params['qty'] = $post['limited'];
			}

			if (isset($post['time-unlimit'])) {
				$params['time_limit'] = $post['time-unlimit'];
			} else if (isset($post['time-limit'])) {
				$params['time_limit'] = $post['time-limit'];
			}

			$config['upload_path'] = './assets/img/reward';
			$config['allowed_types'] = 'jpg|jpeg';
			$config['max_size'] = 20480; // maksimum 2MB
			$config['encrypt_name'] = TRUE;

			$this->upload->initialize($config);
			if ($this->upload->do_upload('reward-gambar')) {
				$uploadData = $this->upload->data();
				$params['image'] = $uploadData['file_name'];


				$reward_id = $this->reward_m->add($params);
				$temp = $this->item_m->get_temp()->result();
				$row = [];
				$qty_item = json_decode($_POST['qty_item'], true);
				$counter = 0;
				foreach($temp as $c =>$data){
					array_push($row, array(
						'reward_id' => $reward_id,
						'reward_item_id' => $data->reward_item_id,
						'qty' => $qty_item[$counter],
					)
				);
				$counter++;
			   }
			   $this->reward_m->add_reward_detail($row);

				$this->item_m->del_temp($this->input->post('project_id'));

				if ($this->db->affected_rows() > 0) {
					$response = array(
						'status' => 'success',
						'message' => 'Item added successfully'
					);
					echo json_encode($response);
				} else {
					$response = array(
						'status' => 'fail',
						'message' => 'Failed to add item'
					);
					echo json_encode($response);
				}
			}
		}
	}

	public function test()
	{
		redirect('reward/add' . '#item_form');
	}


	public function add_item()
	{
		$this->form_validation->set_rules('item', 'Item', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$response = array(
				'status' => 'error',
				'message' => 'Validation Error',
				'errors' => $errors
			);
			echo json_encode($response);
		} else {
			$itemData['item_name'] = $this->input->post('item');
			$itemData['project_id'] = $this->input->post('project_id');
			$this->item_m->add($itemData);

			if ($this->db->affected_rows() > 0) {
				$response = array(
					'status' => 'success',
					'message' => 'Item added successfully'
				);
				echo json_encode($response);
			} else {
				$response = array(
					'status' => 'fail',
					'message' => 'Failed to add item'
				);
				echo json_encode($response);
			}
		}
	}

	public function item_data()
	{
		$data['item'] = $this->item_m->get($this->uri->segment(3));
		$this->load->view('project_form/reward/reward_item', $data);
	}

	public function itemlist_data()
	{
		$this->load->view('project_form/reward/reward_item');
	}


	public function save_item()
	{
		$response = array(); // Initialize an empty response array
		
		if ($this->input->post('item_custom')) {
			$itemname['item_name'] = $this->input->post('item_custom');
			$itemname['project_id'] = $this->input->post('project_id');
			$check_temp = $this->item_m->get_temp(['reward_item_id' => $this->item_m->get_id($itemname['item_name'])]);
			if($check_temp->num_rows() > 0){
				$this->item_m->update_temp($itemname['item_name']);
			}else{
				$this->item_m->add($itemname);
				$itemname['reward_item_id']  = $this->item_m->get_id($itemname['item_name']);
				$this->item_m->add_temp($itemname['item_name'], $itemname['reward_item_id'],$itemname['project_id']);	
			}
			
		} else if ($this->input->post('item')) {
			$itemname['item_name'] = $this->input->post('item');
			$itemname['project_id'] = $this->input->post('project_id');
			$check_temp = $this->item_m->get_temp(['reward_item_id' => $this->item_m->get_id($itemname['item_name'])]);
			if($check_temp->num_rows() > 0){
				$this->item_m->update_temp($itemname['item_name']);
			}else{
				$itemname['reward_item_id']  = $this->item_m->get_id($itemname['item_name']);
				$this->item_m->add_temp($itemname['item_name'], $itemname['reward_item_id'], $itemname['project_id']);
			}
		}

		if ($this->db->affected_rows() > 0) {
			$response['status'] = 'success';
			$response['message'] = 'Item added successfully';
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Failed to add item';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}


	function save_item_data()
	{
		$temp = $this->item_m->get_temp();
		$data['temp'] = $temp;
		$this->load->view('project_form/reward/itemlist', $data);
	}
}
