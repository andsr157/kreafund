<?php

class Item_m extends CI_Model
{
    function get($id){
        $this->db->where('project_id' ,$id);
        $query =  $this->db->get('reward_item');
        return $query;
    }
}