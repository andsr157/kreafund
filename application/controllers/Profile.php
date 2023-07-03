<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_m');
	}

	public function projects()
	{
		check_not_login();
		$userid = $this->session->userdata('user_id');
		$data['project'] = $this->project_m->getByUserId($userid)->result();
		$this->template->load('template/template_basic', 'profile/started', $data);
	}

	public function backed()
	{
		$data['backed'] = $this->trans_m->get($this->session->userdata('user_id'))->result();
		$this->template->load('template/template_basic', 'profile/backed', $data);
	}

	public function profile()
	{
		check_not_login();
		$data['user'] = $this->user_m->get($this->session->userdata('user_id'))->row();
		$this->template->load('template/template_basic', 'profile/profile', $data);
	}


	public function account()
	{
		$data['user'] = $this->user_m->get($this->session->userdata('user_id'))->row();
		$this->template->load('template/template_basic', 'profile/account', $data);
	}


	public function details()
	{

		$userId = $this->user_m->getuserbyUsername($this->uri->segment(3))->row();
		$data['user'] = $this->user_m->get($userId->id)->row();
		$this->template->load('template/template_clean', 'profile/profile_page', $data);
	}

	public function update()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger" style="font-size:12px;">', '</span>');

		if ($this->form_validation->run() == false) {
			$query = $this->user_m->get($this->session->userdata('user_id'));
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template/template_basic', 'profile/profile', $data);
			} else {
				echo "<script>alert('data tidak ada'):";
				echo "window.location='" . base_url() . "'</script>";
			}
		} else {
			$this->load->library('upload');
			$config['upload_path'] = './assets/img/ikon';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;

			$this->upload->initialize($config);
			$userId = $this->input->post('user_id');

			$userData = $this->user_m->get($userId)->row();
			if ($this->upload->do_upload('avatar')) {
				$data = $this->upload->data();
				$gambar_lama = $userData->avatar;
				if ($gambar_lama != 'default_profile.png') {
					unlink(APPPATH . '../assets/img/ikon/' . $gambar_lama);
				}
				$gambar_baru = $this->upload->data('file_name');
				$this->db->set('avatar', $gambar_baru);
				$this->db->where('id', $userId);
				$this->db->update('users');
			}


			$post = $this->input->post(null, true);
			$this->user_m->update($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('data berhasil disimpan')</script>";
			}
			echo "<script>window.location='" . base_url('profile/' . $this->session->userdata('username')) . "'</script>";
		}
	}

	public function saveSetting()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger" style="font-size:12px;">', '</span>');


		if ($this->form_validation->run() == false) {
			$error = $this->form_validation->error();
			$this->template->load('template/template_basic', 'profile/account', $error);
		} else {
			$userId = $this->input->post('user_id');
			$email = $this->input->post('email');
			$password = $this->input->post('currentPassword');
			$query = $this->user_m->saveSetting($userId, $password);

			if ($query->num_rows() > 0) {
				$this->db->set('email', $email);
				$this->db->where('id', $userId);
				$this->db->update('users');
				if ($this->db->affected_rows() > 0) {
					echo "<script>alert('Email berhasil diganti')</script>";
					echo "<script>window.location='" . base_url('profile/account') . "'</script>";
				}
			} else {
				echo "<script>alert('Password tidak benar atau kosong')</script>";
				echo "<script>window.location='" . base_url('profile/account') . "'</script>";
			}
		}
	}
}
