<?php

class Category_m extends CI_Model
{


    function get(){
        $this->db->order_by('category_name', 'ASC');
        $query = $this->db->get('category');
        return $query->result();
    }

    function fetch_subcat($id){
        $this->db->where("category_id", $id);
        $this->db->order_by('subcat_name');
        $query = $this->db->get("subcategory");
        $output = '<option value="">Subcategory</option>';
        foreach ($query->result() as $row){
            $output .= '<option value="'.$row->subcat_id.'">'.$row->subcat_name.'</option>';
        }
        return $output;
        
    }

    function get_location(){
        $this->db->order_by('location_name','ASC');
        $query = $this->db->get('location');
        return $query->result();
    }
}