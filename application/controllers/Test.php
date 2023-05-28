<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$own = $this->validasi->check_own_project(4,1);
        if($own == true){
            redirect('home');
        }else{
            redirect('auth_user/login');
        }
	}

	
	
}
