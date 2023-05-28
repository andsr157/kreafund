<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

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
		$this->template->load('template/template_flat','project_form/start',$data);
	}

	function fetch_subcat(){
		if($this->input->post('category_id')){
			echo $this->category_m->fetch_project_subcat($this->input->post('category_id'), $this->input->post('project_id'));
		}
		
	}

	public function basic(){
		$id = $this->uri->segment(3);
		$query = $this->project_m->get_join_all($id);
		$data['row'] = $query->row();
		$data['category'] = $this->category_m->get();
		$data['location'] = $this->category_m->get_location();
		$this->template->load('template/p_form_template', 'project_form/basic', $data);
	}

	public function reward(){
		$this->template->load('template/p_form_template' ,'project_form/reward');
	}

	public function story(){
		$this->template->load('template/p_form_template' ,'project_form/story');
	}

	public function people(){
		$this->template->load('template/p_form_template' ,'project_form/people');
	}
	public function launch(){
		$this->template->load('template/p_form_template' ,'project_form/launch');
	}

	
}
