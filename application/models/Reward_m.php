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

   
    public function getRewardWithPid($project_id) {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('reward.project_id', $project_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getItems($P)
    {
        $this->db->select('reward_item.*');
        $this->db->from('reward_detail');
        $this->db->join('reward_item', 'reward_detail.reward_item_id = reward_item.reward_item_id');
        $this->db->where('reward_detail.reward_id', $P);
        $query = $this->db->get();
        return $query->result();
    }
}