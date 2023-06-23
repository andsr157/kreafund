<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {


    public function preview(){
        $data['story'] = $this->story_m->getDataById($this->uri->segment(3));
        $data['project'] = $this->project_m->get_all($this->uri->segment(3));
        $data['rewards']  = $this->reward_m->getRewardWithPid($this->uri->segment(3));
        $this->template->load('template/template_clean','projects/project_detail', $data);
    }
	


	
}
