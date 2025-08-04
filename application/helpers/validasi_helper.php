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
        // redirect('project/' . $ci->session->userdata('username') . '/' . $id);
        echo "<script>alert('data tidak disimpan')</script>";
        echo "<script>window.location='" . base_url('project/' . $ci->session->userdata('username')) . '/' . $id . "'</script>";
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


function calculate_datetime($startDateTime, $duration)
{
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

function calculatePercentage($amount, $goal)
{
    if ($goal == 0) {
        return 0; // Mengembalikan 0 jika tujuan (goal) adalah 0
    }

    $percentage = ($amount / $goal) * 100;

    if ($percentage >= 100) {
        return 100; // Mengembalikan nilai 100 jika persentase melebihi atau sama dengan 100
    }

    return floor($percentage);
}

function updateProjectStatus($finish, $id)
{
    $finishDate = date('Y-m-d', strtotime($finish));
    $currentDate = date('Y-m-d');

    if ($finishDate === $currentDate) {
        $CI = &get_instance();
        $CI->db->set('status', 'selesai');
        $CI->db->where('project_id', $id);
        $CI->db->update('project');
    }
}


function updateRewardStock($project_id, $reward_id)
{
    $CI = &get_instance();

    // Menghitung jumlah transaksi dengan project_id, reward_id, dan status_code tertentu
    $CI->db->select('COUNT(*) as total_transactions');
    $CI->db->from('transaction');
    $CI->db->where('project_id', $project_id);
    $CI->db->where('reward_id', $reward_id);
    $CI->db->where('status_code', 200);
    $query = $CI->db->get();
    $result = $query->row();
    $total_transactions = $result->total_transactions;

    // Mengambil nilai qty yang ada dalam tabel rewards
    $CI->db->select('qty');
    $CI->db->from('reward');
    $CI->db->where('reward_id', $reward_id);
    $query = $CI->db->get();
    $result = $query->row();
    $current_qty = $result->qty;

    // Mengurangi total_transactions dari current_qty
    if ($current_qty == 99999) {
        $new_qty = $current_qty;
    } else if ($current_qty == 0) {
        $new_qty = 0;
    } else {
        $new_qty = $current_qty - $total_transactions;
    }

    // Update qty dengan new_qty
    $CI->db->set('temp_qty', $new_qty);
    $CI->db->where('reward_id', $reward_id);
    $CI->db->update('reward');
}

/**
 * Get environment variable with fallback support
 * Works in both local development (.env file) and Docker container (environment variables)
 * 
 * @param string $key Environment variable key
 * @param mixed $default Default value if environment variable is not found
 * @return mixed
 */
function env($key, $default = null) 
{
    // First try $_ENV (populated by dotenv in development)
    if (isset($_ENV[$key])) {
        return $_ENV[$key];
    }
    
    // Then try getenv() (works with Docker environment variables)
    $value = getenv($key);
    if ($value !== false) {
        return $value;
    }
    
    // Return default if not found
    return $default;
}
