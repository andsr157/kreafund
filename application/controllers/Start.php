<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()
	{
		$this->template->load('template/p_form_template','project_form/start');
	}


	public function basic(){
		$this->template->load('template/p_form_template', 'project_form/basic');
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
