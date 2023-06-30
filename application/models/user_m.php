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

    
    public function saveSetting($id ,$pass){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->where('password', sha1($pass));
        $query= $this->db->get();
        return $query;
    }

    

    public function get($id=null){
        $this->db->from('users');
        if ($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
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

    public function getuserbyUsername($name){
        $this->db->where('username', $name);
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


    public function edit($post)
    {   
        $params['name'] = $post['nama'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
            $params['password'] = sha1($post['password']);
        }
        $params['email'] = $post['email'];
        $params['level'] = $post['level'];

        $this->db->where('id', $post['user_id']);
        $this->db->update('users', $params);

    }


    public function update($post)
    {   
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['address'] = $post['address'];
        $params['biography'] = $post['biography'];
        $params['facebook'] = $post['fb'];
        $params['twitter'] = $post['twitter'];
        $params['instagram'] = $post['insta'];
        $params['website'] = $post['web'];
        $this->db->where('id', $post['user_id']);
        $this->db->update('users', $params);

    }
}