<?php

class Story_m extends CI_Model
{

    public function getDataById($id) {
        $this->db->select('*');
        $this->db->from('story');
        $this->db->where('project_id', $id);
        $query = $this->db->get();
        return $query;
    }

   
}