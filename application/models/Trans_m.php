<?php

class Trans_m extends CI_Model
{
    public function get($id,$pId =null){
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('users', 'transaction.user_id = users.id');
        $this->db->join('reward','transaction.reward_id = reward.reward_id');
        $this->db->join('project','transaction.project_id = project.project_id');
        $this->db->where('transaction.user_id',$id);
        if($pId !=null){
            $this->db->where('transaction.project_id',$pId);
            $this->db->where('status_code','200');
        }
        $query = $this->db->get();
        return $query;  
    }
}
