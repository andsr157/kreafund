<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Projects extends CI_Controller
{

	public function project()
	{
		$id = $this->uri->segment(3);
		$own = $this->validasi->check_own_project($this->session->userdata('user_id'), $id);
		if ($own == true) {
			$data['row'] = $this->project_m->get($id)->row();
			$this->template->load('template/p_form_template', 'project_form/pform', $data);
		} else {
			redirect('home');
		}
	}

	// public function project()
	// {
	// 	$this->template->load('template/template','projects/project_detail');
	// }

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			// $this->form_validation->set_rules('category', 'Category', 'required');
			// $this->form_validation->set_rules('subcat', 'Subcategory', 'required');
			// $this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');

			if ($this->form_validation->run() == false) {
				redirect('start');
				echo "alert('salah woi')";
			} else {
				$post = $this->input->post(null, TRUE);
				$this->project_m->add($post);
				if ($this->db->affected_rows() > 0) {
					$username = $this->session->userdata('username');
					$project_id = $this->project_m->get_current_id($this->session->userdata('user_id'));
					$id = (int) $project_id['project_id'];
				}
				redirect('project/' . $username . '/' . $id);
			}
		}

		if (isset($post['edit'])) {

			
			$this->form_validation->set_rules('title', 'Title', 'required');
			$data = $this->input->post(null, TRUE);
			$data['project'] = $this->project_m->get_by_projectid($data['project_id'])->row_array();
			if ($this->form_validation->run() == false) {

				redirect('project/' . $this->session->userdata('username') . '/' . $data['project_id']);
			} else {

				if ($this->input->post('radio') == '30') {
					$basic = $this->input->post(array('project_id', 'title', 'subtitle', 'category', 'subcat', 'location', 'goal', 'standar'));
				} else {
					$basic = $this->input->post(array('project_id', 'title', 'subtitle', 'category', 'subcat', 'location', 'goal', 'custom'));
				}


				$upload_image = $_FILES['gambar']['name'];
				if ($upload_image) {
					$config['upload_path'] = './assets/img/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '10000';
					$config['max_width'] = '10240';
					$config['max_height'] = '10000';
					$config['file_name'] = 'pic' . time();
					$this->upload->initialize($config);
					if ($this->upload->do_upload('gambar')) {
						$gambar_lama = $data['project']['image'];
						if ($gambar_lama != 'default.jpg') {
							unlink(APPPATH . 'assets/img/' . $gambar_lama);
						}
						$gambar_baru = $this->upload->data('file_name');
						$basic['image'] = $gambar_baru;
					} else {
						echo $this->upload->display_errors();
					}
				}
				$this->project_m->edit($basic);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('data berhasil disimpan')</script>";
				}
				echo "<script>window.location='" . base_url('project/' . $this->session->userdata('username') . '/' . $data['project_id']) . "'</script>";
			}
		}
	}

	public function del_basic_image(){
		$post = $this->input->post(null, true);
		$this->project_m->delete_image($post['project_id']);
	
		if($this->db->affected_rows() > 0 ){
			unlink(APPPATH . '..\assets\img\\' . $post['image']);
            $params = array("success" => true);
        }else{          
            $params = array("success" => false);
        }
        echo json_encode($params);
	 }
	
}
