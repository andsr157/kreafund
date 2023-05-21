<?php

function check_already_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('user_id');
    if($user_session){
        redirect('home');
    }
}

function check_not_login(){ 
    $ci =& get_instance();
    $user_session = $ci->session->userdata('user_id');
    if(!$user_session){
        redirect('auth_user/login');
    }
}

function check_admin(){
    $ci =& get_instance();
    $ci->load->library('lvalidasi');
    if($ci->lvalidasi->user_login()->level != 1){
        redirect('dashboard');
    }
}