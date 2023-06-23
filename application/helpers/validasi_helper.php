<?php

function check_already_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('user_id');
    $user_session_level = $ci->session->userdata('level');
    if($user_session && ($user_session_level === 2) ){
        redirect('home');
    }
}


function check_already_login_admin(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('user_id');
    $user_session_level = $ci->session->userdata('level');
    if($user_session && ($user_session_level === 1) ){
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


function formatCurrency($amount) {
    if ($amount >= 1000000) {
        return round($amount / 1000000, 1) . 'JT';
    } elseif ($amount >= 1000) {
        return round($amount / 1000) . 'K';
    } else {
        return $amount;
    }
}
