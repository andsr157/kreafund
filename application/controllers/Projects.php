<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Projects extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();	
		check_not_login();

		
	}

	public function discovery(){
		$data['projects'] = $this->project_m->get_join_all(null, 'verified');
		$this->template->load('template/template', 'projects/projects', $data);
	}

	public function project()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if($check == true){
			$id = $this->uri->segment(3);
			$data['row'] = $this->project_m->get($id)->row();
			$this->template->load('template/p_form_template', 'project_form/pform', $data);
		}else{
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
				redirect('project/' . $this->session->userdata('username') . '/' . $data['project_id'] . '/edit/basic');
			} else {

				if ($this->input->post('radio') == '30') {
					$basic = $this->input->post(array('project_id', 'title', 'subtitle', 'category', 'subcat', 'location', 'goal', 'standar'));
				} else {
					$basic = $this->input->post(array('project_id', 'title', 'subtitle', 'category', 'subcat', 'location', 'goal', 'custom'));
				}

				$this->project_m->edit($basic);
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('data berhasil disimpan')</script>";
				}
				echo "<script>window.location='" . base_url('project/' . $this->session->userdata('username') . '/' . $data['project_id']) . "'</script>";
			}
		}
	}

	public function del_basic_image()
	{
		$post = $this->input->post(null, true);
		$this->project_m->delete_image($post['project_id']);

		if ($this->db->affected_rows() > 0) {
			unlink(APPPATH . '..\assets\img\\' . $post['image']);
			$params = array("success" => true);
		} else {
			$params = array("success" => false);
		}
		echo json_encode($params);
	}

	public function del_basic_video()
	{
		$post = $this->input->post(null, true);
		$this->project_m->delete_video($post['project_id']);

		if ($this->db->affected_rows() > 0) {
			unlink(APPPATH . '..\assets\vid\\' . $post['video']);
			$params = array("success" => true);
		} else {
			$params = array("success" => false);
		}
		echo json_encode($params);
	}


	//  public function upload_image(){
	// 	$p_id = $this->input->post('project_id');
	// 	$data['project'] = $this->project_m->get_by_projectid($p_id)->row_array();
	// 	$upload_gambar = $this->input->post('image_name');
	// 			// var_dump($upload_gambar).die();
	// 			if ($upload_gambar) {
	// 				$config['upload_path'] = './assets/img/';
	// 				$config['allowed_types'] = 'gif|jpg|png';
	// 				$config['max_size'] = '10000';
	// 				$config['max_width'] = '10240';
	// 				$config['max_height'] = '10000';
	// 				$config['file_name'] = 'vid' . time();
	// 				$this->upload->initialize($config);
	// 				if ($this->upload->do_upload($image)) {
	// 					$gambar_lama = $data['project']['image'];
	// 					var_dump($gambar_lama).die();
	// 					if ($gambar_lama != 'default.jpg') {
	// 						unlink(APPPATH . 'assets/img/' . $gambar_lama);
	// 					}
	// 					$gambar_baru = $this->upload->data('file_name');
	// 					$this->db->set('image', $gambar_baru);
	// 				} else {z
	// 					echo $this->upload->display_errors();
	// 				}
	// 			}
	// 			$this->db->where('project_id', $p_id);
	// 			$this->db->update('project');
	// 			if($this->db->affected_rows() > 0){
	// 				$params = array('success' => true);
	// 			}else{
	// 				$params = array('success' => false);
	// 			}
	// 			echo json_encode($params);
	//  }

	public function upload_image()
	{
		// Load library upload
		$this->load->library('upload');
		$p_id = $this->input->post('project_id');
		// Konfigurasi upload
		$config['upload_path'] = './assets/img';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size'] = 2048; // maksimum 2MB
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		$p_id = $this->input->post('project_id');

		$pdata['project'] = $this->project_m->get_by_projectid($p_id)->row_array();
		// Lakukan proses upload
		if ($this->upload->do_upload('image')) {
			// File berhasil diunggah
			$data = $this->upload->data();
			$gambar_lama = $pdata['project']['image'];
			if ($gambar_lama != 'default.jpg') {
				unlink(APPPATH . 'assets/img/' . $gambar_lama);
			}
			$gambar_baru = $this->upload->data('file_name');
			$this->db->set('image', $gambar_baru);
		}

		$this->db->where('project_id', $p_id);
		$this->db->update('project');

		if ($this->db->affected_rows() > 0) {
			$params = array("success" => true);
		} else {
			$params = array("success" => false);
		}

		echo json_encode($params);
	}


	public function upload_video()
	{
		// Load library upload
		$this->load->library('upload');
		$p_id = $this->input->post('project_id');
		// Konfigurasi upload
		$config['upload_path'] = './assets/vid';
		$config['allowed_types'] = 'mp4';
		$config['max_size'] = 25000;
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		$p_id = $this->input->post('project_id');

		$pdata['project'] = $this->project_m->get_by_projectid($p_id)->row_array();
		// Lakukan proses upload
		if ($this->upload->do_upload('video')) {
			// File berhasil diunggah
			$data = $this->upload->data();
			$video_lama = $pdata['project']['video'];
			if ($video_lama != 'default.mp4') {
				unlink(APPPATH . 'assets/vid/' . $video_lama);
			}
			$video_baru = $this->upload->data('file_name');
			$this->db->set('video', $video_baru);
		}

		$this->db->where('project_id', $p_id);
		$this->db->update('project');

		if ($this->db->affected_rows() > 0) {
			$params = array("success" => true);
		} else {
			$params = array("success" => false);
		}

		echo json_encode($params);
	}



	public function verification(){
		
		$data['project'] = $this->project_m->get()->result();

		$this->template->load('template/template_admin', 'admin/project/project_data', $data);

	}
}
