<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Controller {

    // public function Login()
    // {
    //     check_already_login();
    //     $this->load->view('login');
    // }

    public function login()
    {
        $this->template->load('template/template_basic','auth/login');
    }

    public function signup()
    {
        $this->template->load('template/template_basic','auth/signup');
    }
}
    