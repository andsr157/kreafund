<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
		$data['project'] = $this->project_m->get_current($this->session->userdata('user_id'));
		$this->template->load('template/p_form_template','project_form/pform',$data);
	}

	public function project()
	{
		$this->template->load('template/template','projects/project_detail');
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['add'])){
			// $this->form_validation->set_rules('category', 'Category', 'required');
            // $this->form_validation->set_rules('subcat', 'Subcategory', 'required');
            // $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');

			if($this->form_validation->run() == false){
				redirect('start');
				echo"alert('salah woi')";
			}else{
				$post = $this->input->post(null, TRUE);
				$this->project_m->add($post);
				redirect('projects');
				
			}
			
		}
	}
}
