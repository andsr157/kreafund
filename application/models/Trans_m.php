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

    public function getById($id){
        $this->db->select('amount');
        $this->db->where('status_code', 200);
        $this->db->where('project_id' ,$id);
        $query = $this->db->get('transaction');
    
        $totalAmount = 0;
        foreach ($query->result() as $row) {
            $totalAmount += $row->amount;
        }
    
        return $totalAmount;
    }
    
    public function getDonatur($id) {
        $this->db->select('*');
        $this->db->where('status_code', 200);
        $this->db->where('project_id' ,$id);
        $query = $this->db->get('transaction');
    
        $donaturCount = 0;
        $donaturList = array();
    
        foreach ($query->result() as $row) {
            $userId = $row->user_id;
                if (!in_array($userId, $donaturList)) {
                $donaturList[] = $userId;
                $donaturCount++;
            }
        }
    
        return $donaturCount;
    }


    public function getBank(){
        $query = $this->db->get('bank');
        return $query;
    }

    public function getPayment($id){
        $this->db->where('project_id',$id);
        $query = $this->db->get('p_payment');
        return $query;
    }
    
}
