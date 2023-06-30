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

    public function test()
    {
        $this->_sendEmail();
    }

    private function _sendEmail($token)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kreafundd@gmail.com',
            'smtp_pass' => 'xvuncferixkfdhyg',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",

        ];

        $this->load->library('email', $config);

        $this->email->from('kreafundd@gmail.com', 'kreafund.com');
        $this->email->to($this->input->post('email'));

        $this->email->subject('Change Password');
        $this->email->message('Klik link ini untuk mengganti passwordmu : <a href = "' . base_url() . 'auth_user/resetpassword?email='
            . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');



        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function signup()
    {
        $this->template->load('template/template_basic', 'auth/signup');
    }

    public function forgotPassword()
    {

        $this->template->load('template/template_basic', 'auth/forgot');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['signup'])) {

            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', [
                'is_unique' => 'Username sudah dipakai ganti yang lain',
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
                }
                echo"alert('akun berhasil dibuat')";
                echo "<script>window.location='" . base_url('auth_user/login') . "'</script>";
            }
        }

        if (isset($post['login'])) {
            $this->load->model('User_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'user_id' => $row->id,
                    'level' => $row->level,
                    'username' => $row->username,
                    'avatar' => $row->avatar
                );
                $this->session->set_userdata($params);
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success d-flex align-items-center alert-message" role="alert">
                            <div>
                               Login berhasil
                            </div>
                        </div>'
                );
                redirect('home');
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger d-flex align-items-center alert-message" role="alert">
                            <div>
                               Email atau password salah
                            </div>
                        </div>'
                );
                redirect('auth_user/login');
            }
        }

        if (isset($post['forgot'])) {
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == false) {

                $this->template->load('template/template_basic', 'auth/forgot');
            } else {
                $email = $this->input->post('email');
                $user = $this->user_m->getuserbyEmail($email)->row_array();

                if ($user) {
                    $token = base64_encode(random_bytes(32));
                    $user_token = [
                        'email' => $email,
                        'token' => $token,
                    ];

                    $this->db->insert('tokens', $user_token);
                    $this->_sendEmail($token);

                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success d-flex align-items-center alert-message" role="alert">
                        <div>
                           link reset password sudah terkirim ke email
                        </div>
                    </div>'
                    );
                    redirect('auth_user/forgotPassword');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger d-flex align-items-center alert-message" role="alert">
                            <div>
                               Email salah atau tidak terdaftar
                            </div>
                        </div>'
                    );
                    redirect('auth_user/forgotPassword');
                }
            }
        }

        if (isset($post['reset'])) {

            if(!$this->session->userdata('reset_email')){
                redirect('auth_user/login');
            }
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
                'required|trim|matches[password]',[
                    'matches' => 'Password Tidak Sama!!',
                    'min_length' => 'Password minimal 5 karakter'
                ]
            );

            if ($this->form_validation->run() == false) {
                $this->template->load('template/template_basic', 'auth/reset');
                
            }else{

                $post = $this->input->post(null, true);
                $email = $this->session->userdata('reset_email');
                $this->user_m->updatePassword($post, $email);

                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success d-flex align-items-center alert-message" role="alert">
                            <div>
                              Password sukses diganti
                            </div>
                        </div>'
                    );
                    $params = array('user_id', 'level','username','avatar');
                    $this->session->unset_userdata($params);
                    redirect('auth_user/login');
                
                $this->session->unset_userdata('reset_email');
            }
        }
    }


    public function logout()
    {
        $params = array('user_id', 'level','username','avatar');
        $this->session->unset_userdata($params);
        redirect('home');
    }


    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->user_m->getuserbyEmail($email)->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tokens', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changepassword();
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger d-flex align-items-center alert-message" role="alert">
                            <div>
                               token tidak valid
                            </div>
                        </div>'
                );
                redirect('auth_user/login');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger d-flex align-items-center alert-message" role="alert">
                            <div>
                               Reset link tidak valid
                            </div>
                        </div>'
            );
            redirect('auth_user/login');
        }
    }

    public function changepassword()
    {
        $this->template->load('template/template_basic', 'auth/reset');
    }
}
