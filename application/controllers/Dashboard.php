<?php defined('BASEPATH') or exit ('no direct script access allowed');
    
class Dashboard extends CI_Controller{

    public function index()
    {
        check_not_login_admin();
        check_admin();
        // check_already_login_admin();
        $this->template->load('template/template_admin','admin/dashboard');
    }
}