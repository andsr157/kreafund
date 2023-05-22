<?php

class Project_m extends CI_Model
{

    public function get_current($id){
        $this->db->from('project');
        $this->db->where('user_id', $id);
        $this->db->order_by('created', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
        
    }

    public function add($post){
        $params['category_id'] =$post['category'];
        $params['subcat_id'] =$post['subcat'];
        $params['location_id    '] =$post['location'];
        $params['title'] =$post['title'];
        $params['user_id'] = $this->session->userdata('user_id');

        $this->db->insert('project', $params);
    }
}