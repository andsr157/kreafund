<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Start extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_m');
		check_not_login();

		// $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
	}

	public function index()
	{

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
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
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
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$data['project_id'] = $this->uri->segment(3);
			$data['item'] = $this->item_m->get($this->uri->segment(3));
			$data['temp'] = $this->item_m->get_temp();
			$data['rewards']  = $this->reward_m->getRewardWithPid($this->uri->segment(3));
			// var_dump(intval($this->uri->segment(3))).die(); 
			// var_dump($data['item']->result()).die();
			$this->template->load('template/p_form_template', 'project_form/reward', $data);
		} else {
			redirect('home');
		}
	}

	public function story()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$id = $this->uri->segment(3);
			$query = $this->story_m->getDataById($id);
			$data['row'] = $query->row();
			// var_dump($data['row']).die();
			$this->template->load('template/p_form_template', 'project_form/story', $data);
		} else {
			redirect('home');
		}
	}

	public function people()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$data['user'] = $this->project_m->get($this->uri->segment(3))->row();
			$this->template->load('template/p_form_template', 'project_form/people',$data);
		}else{
			redirect('home');
		}
	}

	public function payment()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$data['banks'] = $this->trans_m->getBank()->result();
			$data['payment'] = $this->trans_m->getPayment($this->uri->segment(3))->row();
			// var_dump($data['payment']).die();
			$this->template->load('template/p_form_template', 'project_form/payment',$data);
		}else{
			redirect('home');
		}

		
	}


	public function launch()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$data['status'] = $this->project_m->get($this->uri->segment(3))->row()->status;
			$data['revisi'] = $this->project_m->getRevition($this->uri->segment(3));
			$data['rejected'] = $this->project_m->getRejected($this->uri->segment(3));
			$this->template->load('template/p_form_template', 'project_form/launch',$data);
		}else{
			redirect('home');
		}
	}

	public function test()
	{
		// $data['rewards'] = $this->reward_m->getRewardWithDetails(4);
		// $this->load->view('test', $data);

		$data = $this->reward_m->getItems(91);
		var_dump($data) . die();
	}

	public function backer(){
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
			$data['project'] = $this->trans_m->get($this->session->userdata('user_id'),$this->uri->segment(3))->result();
			$this->template->load('template/p_form_template', 'project_form/backer',$data);
		}else{
			redirect('home');
		}
	}
}
