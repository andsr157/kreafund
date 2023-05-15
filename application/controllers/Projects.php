<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
		$this->template->load('template/template','projects/projects');
	}

	public function project()
	{
		$this->template->load('template/template','projects/project_detail');
	}
}
