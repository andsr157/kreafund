<?php

class Reward_m extends CI_Model
{
    

    public function add($data){
        
        $this->db->insert('reward', $data);
    }
}