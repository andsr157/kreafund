<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward_m extends CI_Model
{
  
    public function get($id=null){
        if($id != null){
            $this->db->where('reward_id', $id);
        }
        $query = $this->db->get('reward');
        return $query;

    }

    public function getRewardDetail($id){
        $this->db->select('*');
        $this->db->from('reward_detail');
        $this->db->where('reward_id',$id);
        $query = $this->db->get();
        return $query;
    }

    public function getRewardWithPid($project_id) {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('reward.project_id', $project_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getRewardIdWithPid($project_id) {
        $this->db->select('reward_id');
        $this->db->from('reward');
        $this->db->where('project_id', intval($project_id));
        $query = $this->db->get();
        return $query->result_array();
    }


    public function getItems($P)
    {
        $this->db->select('reward_item.*, reward_detail.qty');
        $this->db->from('reward_detail');
        $this->db->join('reward_item', 'reward_detail.reward_item_id = reward_item.reward_item_id');
        $this->db->where('reward_detail.reward_id', $P);
        $query = $this->db->get();
        return $query;
    }


    public function add($data){
        
        $this->db->insert('reward', $data);
        return $this->db->insert_id();
    }

    public function add_reward_detail($data){
        $this->db->insert_batch('reward_detail', $data);
    }

    public function update($data, $id){
        $this->db->where("reward_id", $id);
        $this->db->update("reward", $data);
    }

    public function update_rewardDetail_qty($row, $reward_id) {
        $item_id = array_column($row, 'reward_item_id');
        $qtys = array_column($row, 'qty');
        foreach ($item_id as $index => $id) {
            $this->db->set('qty', $qtys[$index], FALSE);
            $this->db->where('reward_id', $reward_id);
            $this->db->where('reward_item_id', $id);
            $this->db->update('reward_detail');
        }
    }
    
    
    
}