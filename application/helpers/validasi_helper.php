<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    $user_session_level = $ci->session->userdata('level');
    if (!empty($user_session) && ($user_session_level == 2)) {
        redirect('home');
    }
}


function check_already_login_admin()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    $user_session_level = $ci->session->userdata('level');
    if (!empty($user_session) && ($user_session_level == 1)) {
        redirect('dashboard');
    }
}


function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if (!$user_session) {
        redirect('auth_user/login');
    }
}

function check_not_login_admin()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if (!$user_session) {
        redirect('admin');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('validasi');
    if ($ci->validasi->user_login()->level != 1) {
        redirect('home');
    }
}


function formatCurrency($amount)
{
    if ($amount >= 1000000) {
        return round($amount / 1000000, 1) . 'JT';
    } elseif ($amount >= 1000) {
        return round($amount / 1000) . 'K';
    } else {
        return $amount;
    }
}


function checkStatusProject($id)
{
    $ci = &get_instance();
    $data = $ci->project_m->get_all($id)->row()->status;
    if ($data == 'accepted' || $data == "pending") {
        redirect('project/' . $ci->session->userdata('username') . '/' . $id);
    }
}

function format_datetime($datetime)
{
    $CI = &get_instance();
    $dateString = $datetime;
    $dateTime = new DateTime($dateString);
    $formattedDateTime = $dateTime->format('d F Y H:i:s');
    return $formattedDateTime;
}


function calculate_datetime($startDateTime, $duration) {
    // Konversi tanggal mulai ke dalam format timestamp
    $startTimestamp = strtotime($startDateTime);

    // Hitung durasi dalam detik
    $durationSeconds = $duration * 24 * 60 * 60;

    // Hitung timestamp akhir
    $endTimestamp = $startTimestamp + $durationSeconds;

    // Format tanggal akhir dalam format datetime
    $endDateTime = date('Y-m-d H:i:s', $endTimestamp);

    return $endDateTime;
}