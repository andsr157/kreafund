<?php defined('BASEPATH') or exit('no direct script access allowed');

class Auth_admin extends CI_Controller
{

    public function Login()
    {
        $this->load->view('admin/auth/login');
    }



    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {

                $row = $query->row();
                if ($row->level == 1) {
                    $params = array(
                        'user_id' => $row->id,
                        'level' => $row->level,
                        'username' => $row->username
                    );
                    $this->session->set_userdata($params);
                    echo "<script>
                        alert('selamat ,login berhasil');
                        window.location='" . base_url('dashboard') . "';
                    </script>";
                } else {
                    echo "<script>
                        alert('login gagal');
                        window.location='" . base_url('admin') . "';
                    </script>";
                }
            } else {
                echo "<script>
                        alert('login gagal');
                        window.location='" . base_url('admin') . "';
                    </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('user_id', 'level');
        $this->session->unset_userdata($params);
        redirect('amin');
    }
}
