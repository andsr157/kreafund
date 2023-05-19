<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{

    // public function Login()
    // {
    //     check_already_login();
    //     $this->load->view('login');
    // }

    public function login()
    {
        check_already_login();
        $this->template->load('template/template_basic', 'auth/login');
    }

    public function signup()
    {
        $this->template->load('template/template_basic', 'auth/signup');
    }

    public function process()
    {
        $post =$this->input->post(null, TRUE);
        if (isset($post['signup'])) {

            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]',['is_unique'=>'Username sudah dipakai ganti yang lain',
            'required' => 'Username Harus diisi!!'
        ]);
            

            $this->form_validation->set_rules(
                'email',
                'Alamat Email',
                'required|trim|valid_email|is_unique[users.email]|matches[re_email]',
                [
                    'valid_email' => 'Email Tidak Benar!!',
                    'required' => 'Email Belum diisi!!',
                    'is_unique' => 'Email Sudah Terdaftar!'
                ]
            );

            $this->form_validation->set_rules('re_email', 'Emailconf', 'required|trim|matches[email]');

            $this->form_validation->set_rules(
                'password',
                'Password',
                'required|trim|min_length[5]|matches[re_password]',
                [
                    'matches' => 'Password Tidak Sama!!',
                    'min_length' => 'Password minimal 5 karakter'
                ]
            );

            $this->form_validation->set_rules(
                're_password',
                'Passconf',
                'required|trim|matches[password]'
            );

            if ($this->form_validation->run() == false) {
                $this->template->load('template/template_basic', 'auth/signup');
                echo "<script>alert('validasi bernilai false');</script>";
            } else {
                $post = $this->input->post(null, TRUE);
                $this->user_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('pesan',
                        '<div class="alert alert-success d-flex align-items-center alert-message" role="alert">
                            <div>
                               Akun Berhasil dibuat silahkan login!
                            </div>
                        </div>'
                    );
                }
                echo "<script>window.location='" . base_url('auth_user/login') . "'</script>";
            }
        }

        if(isset($post['login'])){
            $this->load->model('User_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'user_id' => $row->id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                $this->session->set_flashdata('pesan',
                        '<div class="alert alert-success d-flex align-items-center alert-message" role="alert">
                            <div>
                               Login berhasil
                            </div>
                        </div>'
                    );
                    redirect('home');

            }else{
                $this->session->set_flashdata('pesan',
                        '<div class="alert alert-danger d-flex align-items-center alert-message" role="alert">
                            <div>
                               Email atau password salah
                            </div>
                        </div>'
                    );
                    redirect('auth_user/login');
            }
        }
    }

    public function logout(){
        $params = array('user_id','level');
        $this->session->unset_userdata($params);
        redirect('home');
    }
}
