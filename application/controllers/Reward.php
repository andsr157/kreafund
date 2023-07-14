<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reward extends CI_Controller
{

	public function add()
	{
		check_not_login();
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
			$params['description'] = $post['desc'];
			$params['est_delivery'] = $post['month'] . "/" . $post['year'];
			$params['project_id'] = $post['project_id'];
			
			if (isset($post['unlimited']) && !empty($post['unlimited']) ) {
				$params['qty'] = $post['unlimited'];
				$params['temp_qty'] = $post['unlimited'];
			} else if (isset($post['limited']) && !empty($post['limited'])) {
				$params['qty'] = $post['limited'];
				$params['temp_qty'] = $post['limited'];
			}

			if (isset($post['time-unlimit'])) {
				$params['time_limit'] = $post['time-unlimit'];
			} else if (isset($post['time-limit'])) {
				$params['time_limit'] = $post['time-limit'];
			}

			$config['upload_path'] = './assets/img/reward';
			$config['allowed_types'] = 'jpg|jpeg|png|avif';
			$config['max_size'] = 204800; // maksimum 2MB
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
				foreach ($temp as $c => $data) {
					array_push(
						$row,
						array(
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

	public function update()
	{
		check_not_login();
		$reward_id = $this->input->post('reward_id');
		$old_image = $this->reward_m->get($reward_id)->row()->image;
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
			$params['description'] = $post['desc'];
			$params['est_delivery'] = $post['month'] . "/" . $post['year'];
			$params['project_id'] = $post['project_id'];

			if (isset($post['unlimited']) && !empty($post['unlimited']) ) {
				$params['qty'] = $post['unlimited'];
				$params['temp_qty'] = $post['unlimited'];
			} else if (isset($post['limited']) && !empty($post['limited'])) {
				$params['qty'] = $post['limited'];
				$params['temp_qty'] = $post['limited'];
			}
			// $params['qty'] = 99999;

			if (isset($post['time-unlimit']) && !empty($post['time-unlimit'])) {
				$params['time_limit'] = $post['time-unlimit'];
			} else if (isset($post['time-limit']) && !empty($post['time-limit'])) {
				$params['time_limit'] = $post['time-limit'];
			}

			// $params['time_limit'] = 99999;

			if (!empty($_FILES['reward-gambar']['name'])) {
				$config['upload_path'] = './assets/img/reward';
				$config['allowed_types'] = 'jpg|jpeg';
				$config['max_size'] = 20480;
				$config['encrypt_name'] = TRUE;

				$this->upload->initialize($config);

				if ($this->upload->do_upload('reward-gambar')) {
					// Hapus gambar lama
					unlink('./assets/img/reward/' . $old_image);

					// Upload gambar baru
					$uploadData = $this->upload->data();
					$params['image'] = $uploadData['file_name'];
				} else {
					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
					echo json_encode($response);
					return;
				}
			}
			$row = [];
			$rewarditem = $this->reward_m->getRewardDetail($reward_id)->result();
			$qty_item = json_decode($_POST['qty_item'], true);
			$counter = 0;
			foreach ($rewarditem as $key => $data) {
				array_push(
					$row,
					array(
						'reward_item_id' => $data->reward_item_id,
						'qty' => $qty_item[$counter]
					)
				);
				$counter++;
			}

			$rewardUpdated = $this->reward_m->update($params, $reward_id);
			$rewardDetailUpdated = $this->reward_m->update_rewardDetail_qty($row, $reward_id);

			if ($rewardUpdated || $rewardDetailUpdated) {
				$response = array(
					'status' => 'success',
					'message' => 'Reward updated successfully'
				);
				echo json_encode($response);
			} else {
				$response = array(
					'status' => 'fail',
					'message' => 'Failed to update reward'
				);
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			}
		}
	}





	public function test()
	{
		// redirect('reward/add' . '#item_form');
		// $reward_item_id = $this->item_m->get_id_from_dtl(16, 'baju');
		// var_dump($reward_item_id).die();
		$test = $this->reward_m->getRewardDetail(19);
		var_dump($test->result());
	}


	public function add_item()
	{
		check_not_login();
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

	public function update_item()
	{
		check_not_login();
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
			$itemid = $this->input->post('item_id');
			$itemname = $this->input->post('item');
			$this->item_m->update($itemid, $itemname);

			if ($this->db->affected_rows() > 0) {
				$response = array(
					'status' => 'success',
					'message' => 'Item edited successfully'
				);
				echo json_encode($response);
			} else {
				$response = array(
					'status' => 'fail',
					'message' => 'Failed to edit item'
				);
				echo json_encode($response);
			}
		}
	}


	public function delete_item()
	{
		check_not_login();
		$this->db->where('reward_item_id', $this->input->post('item_id'));
		$this->db->delete('reward_item');

		if ($this->db->affected_rows() > 0) {
			$response = array(
				'status' => 'success',
				'message' => 'Item deleted successfully'
			);
			echo json_encode($response);
		} else {
			$response = array(
				'status' => 'fail',
				'message' => 'Failed to delete item'
			);
			echo json_encode($response);
		}
	}


	public function item_data()
	{
		check_not_login();
		$data['item'] = $this->item_m->get($this->uri->segment(3));
		$this->load->view('project_form/reward/reward_item', $data);
	}

	public function itemlist_data()
	{
		check_not_login();
		$this->load->view('project_form/reward/reward_item');
	}

	public function save_item()
	{
		check_not_login();
		$response = array();

		if ($this->input->post('item_custom')) {
			$itemname = $this->input->post('item_custom');
		} else if ($this->input->post('item')) {
			$itemname = $this->input->post('item');
		}

		if (!empty($itemname)) {
			$project_id = $this->input->post('project_id');
			$reward_item_id = $this->item_m->get_id($itemname);
			$check_temp = $this->item_m->get_temp(['reward_item_id' => $reward_item_id]);

			if ($check_temp->num_rows() > 0) {
				$this->item_m->update_temp($itemname);
			} else {
				if ($reward_item_id == null) {
					$this->item_m->add(['item_name' => $itemname, 'project_id' => $project_id]);
				}
				$reward_item_id = $this->item_m->get_id($itemname);
				$this->item_m->add_temp($itemname, $reward_item_id, $project_id);
			}

			if ($this->db->affected_rows() > 0) {
				$response['status'] = 'success';
				$response['message'] = 'Item added successfully';
			} else {
				$response['status'] = 'fail';
				$response['message'] = 'Failed to add item';
			}
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Item name is required';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function save_plus_item()
	{
		check_not_login();
		$response = array();

		if ($this->input->post('item_custom')) {
			$itemname = $this->input->post('item_custom');
		} else if ($this->input->post('item')) {
			$itemname = $this->input->post('item');
		}

		if (!empty($itemname)) {
			$project_id = $this->input->post('project_id');
			$reward_id = $this->input->post('reward_id');
			$check_already_item = $this->item_m->get_id($itemname);
			$reward_item_id = $this->item_m->get_id_from_dtl($reward_id, $itemname);
			$qty = $this->input->post('qty');
			// $check_submited_item = $this->item_m->get_submit_item( $reward_id, $reward_item_id);

			if ($reward_item_id != null) {
				$this->item_m->update_submit_item($reward_id, $reward_item_id);
			} else {
				if ($check_already_item == null) {
					$this->item_m->add(['item_name' => $itemname, 'project_id' => $project_id]);
				}
				$reward_item_id = $this->item_m->get_id($itemname);
				$this->item_m->add_submit_item($reward_id, $reward_item_id, $qty);
			}

			if ($this->db->affected_rows() > 0) {
				$response['status'] = 'success';
				$response['message'] = 'Item added successfully';
			} else {
				$response['status'] = 'fail';
				$response['message'] = 'Failed to add item';
			}
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Item name is required';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}


	function save_item_data()
	{
		check_not_login();
		$temp = $this->item_m->get_temp();
		$data['temp'] = $temp;
		$this->load->view('project_form/reward/itemlist', $data);
	}

	function show_item_data()
	{
		check_not_login();
		$items = $this->input->post('items');
		$data['items'] = $items;
		$this->load->view('project_form/reward/itemlistreward', $data);
	}


	function edited_item_data()
	{
		check_not_login();
		$id = $this->input->post('reward_id');
		$data['items'] = $this->reward_m->getItems($id)->result_array();
		$this->load->view('project_form/reward/itemlistreward', $data);
	}

	function submit_item_data()
	{
		check_not_login();
		$reward_id = $this->uri->segment(3);
		$items = $this->reward_m->getItems($reward_id)->result_array();
		$data['items'] = $items;
		$this->load->view('project_form/reward/itemlistreward', $data);
	}

	public function del_temp()
	{
		check_not_login();
		$id = $this->input->post('temp_id');
		$this->db->where('item_temp_id', $id);
		$this->db->delete('item_temp');

		if ($this->db->affected_rows() > 0) {
			$response['status'] = 'success';
			$response['message'] = 'Item deleted successfully';
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Item deleted failed';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function del_submited_item()
	{
		check_not_login();
		$reward_id = $this->input->post('reward_id');
		$reward_item_id = $this->input->post('reward_item_id');
		$this->db->where('reward_id', $reward_id);
		$this->db->where('reward_item_id', $reward_item_id);
		$this->db->delete('reward_detail');

		if ($this->db->affected_rows() > 0) {
			$response['status'] = 'success';
			$response['message'] = 'Item deleted successfully';
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Item deleted failed';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
	public function reload_item_list()
	{
		check_not_login();
		$data['item'] = $this->item_m->get($this->uri->segment(3));
		$view_content = $this->load->view('project_form/reward/itemlist_select', $data, true);
		echo $view_content;
	}





	public function del_reward()
	{
		check_not_login();
		$reward_id = $this->input->post('reward_id');
		$this->db->where('reward_id', $reward_id);
		$this->db->delete('reward');
		$this->db->where('reward_id', $reward_id);
		$this->db->delete('reward_detail');

		if ($this->db->affected_rows() > 0) {
			$response['status'] = 'success';
			$response['message'] = 'Reward deleted successfully';
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Reward deleted failed';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function duplicate_reward()
	{
		check_not_login();
		$reward_id = $this->input->post('reward_id');
		$reward = $this->reward_m->get($reward_id)->result_array();
		if (!empty($reward)) {
			$copyreward = array();
			foreach ($reward as $row) {
				$copyreward[] = array(
					'title' => $row['title'],
					'amount' => $row['amount'],
					'image' => $row['image'],
					'description' => $row['description'],
					'est_delivery' => $row['est_delivery'],
					'qty' => $row['qty'],
					'time_limit' => $row['time_limit'],
					'project_id' => $row['project_id'],
				);
			}
			$this->db->insert_batch('reward', $copyreward);
		}
		$new_reward_id = $this->db->insert_id();
		$reward_detail = $this->reward_m->getRewardDetail($reward_id)->result_array();

		if (!empty($reward_detail)) {
			$copyreward_detail = array();
			foreach ($reward_detail as $row) {
				$copyreward_detail[] = array(
					'reward_id' => $new_reward_id,
					'reward_item_id' => $row['reward_item_id'],
					'qty' => $row['qty'],

				);
			}
			$this->db->insert_batch('reward_detail', $copyreward_detail);
		}

		if ($this->db->affected_rows() > 0) {
			$response['status'] = 'success';
			$response['message'] = 'Reward duplicate successfully';
		} else {
			$response['status'] = 'fail';
			$response['message'] = 'Reward dupllicate failed';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}


	function show_reward_list()
	{
		check_not_login();
		$data['item'] = $this->item_m->get($this->uri->segment(3));
		$data['temp'] = $this->item_m->get_temp();
		$data['rewards']  = $this->reward_m->getRewardWithPid($this->uri->segment(3));
		$this->load->view('project_form/reward/reward_list', $data);
	}
}
