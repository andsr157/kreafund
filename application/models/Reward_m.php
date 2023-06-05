<?php

class Reward_m extends CI_Model
{
    

    public function add($data){
        
        $this->db->insert('reward', $data);
        return $this->db->insert_id();
    }

    public function add_reward_detail($data){
        $this->db->insert_batch('reward_detail', $data);
    }
}