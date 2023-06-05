<?php

class Item_m extends CI_Model
{
    function get($id){
        $this->db->where('project_id' ,$id);
        $query =  $this->db->get('reward_item');
        return $query;
    }

    function get_id($id) {
        $this->db->from('reward_item');
        $this->db->select('reward_item_id');
        $this->db->where('item_name', $id);
        $query =  $this->db->get();
        $result = $query->row();
        return $result->reward_item_id; 
    }

    function get_temp($params=null){
        $this->db->from('item_temp');
        if($params != null){
            $this->db->where($params);
        }
        $query = $this->db->get();
        return $query;
    }

    function add($data){
        $this->db->insert('reward_item', $data);
    }

    function add_temp($name, $id, $pid){
        $temp = array('reward_item_id' => $id,'item_name' => $name, 'qty' => 1, 'project_id' => $pid);
        $this->db->insert('item_temp', $temp);
    }

    function update_temp($data){
        $this->db->set('qty', 'qty + 1', false);
        $this->db->where('item_name', $data);
        $this->db->update('item_temp');

    }

    function del_temp($data){
        $this->db->where('project_id', $data);
        $this->db->delete('item_temp');
    }
    
}