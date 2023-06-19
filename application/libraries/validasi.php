<?php
class Validasi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $userid = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_m->get($userid)->row();
        return $user_data;
    }

    function check_own_project($user_id, $project_id)
    {
        $query = $this->ci->project_m->get($project_id);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            if (($row->user_id == $user_id)) {
                return true;
            }
            return false;
        }
    }
}
