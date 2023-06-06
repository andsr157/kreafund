<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Start extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_m');
	}

	public function index()
	{
		check_not_login();
		$data['category'] = $this->category_m->get();
		$data['location'] = $this->category_m->get_location();
		$this->template->load('template/template_flat', 'project_form/start', $data);
	}

	function fetch_subcat()
	{
		if ($this->input->post('category_id')) {
			echo $this->category_m->fetch_project_subcat($this->input->post('category_id'), $this->input->post('project_id'));
		}
	}

	public function basic()
	{

		$own = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($own == true) {
			$id = $this->uri->segment(3);
			$query = $this->project_m->get_join_all($id);
			$data['row'] = $query->row();
			$data['category'] = $this->category_m->get();
			$data['location'] = $this->category_m->get_location();
			$this->template->load('template/p_form_template', 'project_form/basic', $data);
		} else {
			redirect('home');
		}
	}

	public function reward()
	{
		$data['id'] = $this->uri->segment(3);
		$data['item'] = $this->item_m->get($this->uri->segment(3));
		$data['temp'] = $this->item_m->get_temp();
		// var_dump(intval($this->uri->segment(3))).die();
		// var_dump($data['item']->result()).die();
		$this->template->load('template/p_form_template', 'project_form/reward', $data);
	}

	public function story()
	{
		$this->template->load('template/p_form_template', 'project_form/story');
	}

	public function people()
	{
		$this->template->load('template/p_form_template', 'project_form/people');
	}
	public function launch()
	{
		$this->template->load('template/p_form_template', 'project_form/launch');
	}
}
