<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_m');
	}

	public function projects(){
        $userid = $this->session->userdata('user_id');
        $data['project'] = $this->project_m->get_title_image($userid);
        $this->template->load('template/template_basic', 'profile/started' ,$data );
    }

	
}
