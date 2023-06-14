<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$own = $this->validasi->check_own_project(4,1);
        if($own == true){
            redirect('home');
        }else{
            redirect('auth_user/login');
        }
	}

    public function itemdata(){
        $this->db->select('reward_item.*, reward_detail.qty');
        $this->db->from('reward_detail');
        $this->db->join('reward_item', 'reward_detail.reward_item_id = reward_item.reward_item_id');
        $this->db->where('reward_detail.reward_id', 15);
        $query = $this->db->get();
        var_dump($query->result()).die();
    }

	
	
}
