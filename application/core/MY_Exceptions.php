<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Exceptions extends CI_Exceptions {

    public function show_404($page = '', $log_error = TRUE)
    {
        $CI =& get_instance();

        $CI->load->view('errors/404');
        $output = $CI->output->get_output();
        if (empty($output)) {
            $output = $CI->output->get_output(true);
        }
        echo $output;
        exit;
    }
}
    