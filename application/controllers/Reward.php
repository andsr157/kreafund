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
			if (isset($post['unlimited'])) {
				$params['qty'] = $post['unlimited'];
			}else if (isset($post['limited'])) {
				$params['qty'] = $post['limited'];
			}

			if (isset($post['time-unlimit'])) {
				$params['time_limit'] = $post['time-unlimit'];
			}else if (isset($post['time-limit'])) {
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


				$this->reward_m->add($params);

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
			$this->db->insert('reward_item', $itemData);

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
}
