<?php

class User_m extends CI_Model
{

    public function login($post){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['password']));
        $query= $this->db->get();
        return $query;
    }

    public function get($id=null){
        $this->db->from('users');
        if ($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db-get();
        return $query;
    }

    public function add($post){
        $params['username'] =$post['username'];
        $params['email'] =$post['email'];
        $params['password'] =sha1($post['password']);
        $params['level'] =$post['level'];

        $this->db->insert('users', $params);
    }

    public function getuserbyEmail($params){
        $this->db->where('email', $params);
        $query  = $this->db->get('users');
        return $query;


    }

    public function getValidUser(){
        $this->db->get_where();
    }


    public function updatePassword($post, $email){
        $this->db->set('password', sha1($post['password']));
        $this->db->where('email', $email);
        $this->db->update('users');

    }
}