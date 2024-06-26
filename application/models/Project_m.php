<?php

class Project_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('project');
        $this->db->join('users', 'users.id = project.user_id');

        $this->db->where('project_id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function getByUserId($id)
    {
        $this->db->from('project');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getVerification()
    {
        $this->db->from('project');
        $this->db->where('status', 'pending');
        $query = $this->db->get();
        return $query;
    }

    public function getDone()
    {
        $this->db->from('project');
        $this->db->where('status', 'selesai');
        $query = $this->db->get();
        return $query;
    }

    public function getFeatured()
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->order_by('created', 'ASC');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query;
    }

    public function getFresh()
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->join('users', 'users.id = project.user_id');
        $this->db->order_by('project.created', 'DESC');
        $this->db->where('status', 'accepted');
        $this->db->limit(7);
        $query = $this->db->get();
        return $query;
    }

    public function get_all($id = null)
    {
        $this->db->select('*');
        if ($id != null) {
            $this->db->where('project_id', $id);
        }
        $query =  $this->db->get('project');
        return $query;
    }

    public function get_join_all($id = null, $status = null)
    {
        $this->db->from('project');
        $this->db->join('users', 'users.id = project.user_id');
        $this->db->join('category', 'category.category_id = project.category_id');
        $this->db->join('subcategory', 'subcategory.subcat_id = project.subcat_id');
        $this->db->join('location', 'location.location_id = project.location_id');
        if ($status != null) {
            $this->db->where('status', $status);
        }
        if ($id != null) {
            $this->db->where('project_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }



    public function getAllByCategory($category = null, $status = null)
    {
        $this->db->from('project');
        $this->db->join('users', 'users.id = project.user_id');
        $this->db->join('category', 'category.category_id = project.category_id');
        $this->db->join('subcategory', 'subcategory.subcat_id = project.subcat_id');
        $this->db->join('location', 'location.location_id = project.location_id');
        if ($status != null) {
            $this->db->where('status', $status);
        }
        if ($category != null) {
            $this->db->where('category_name', $category);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_title_image($id)
    {

        $this->db->select('project_id,title,image');
        $this->db->where('user_id', $id);
        $query = $this->db->get('project');
        return $query->result();
    }

    public function get_current_id($id)
    {
        $this->db->select('project_id');
        $this->db->where('user_id', $id);
        $this->db->order_by('created', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('project');
        return $query->row_array();
    }

    public function getIdByTitle($name)
    {
        $this->db->select('project_id, user_id');
        $this->db->from('project');
        $this->db->where('title', urldecode($name));
        $query = $this->db->get();
        return $query->row();
    }

    public function add($post)
    {
        $params['category_id'] = $post['category'];
        $params['subcat_id'] = $post['subcat'];
        $params['location_id '] = $post['location'];
        $params['title'] = $post['title'];
        $params['user_id'] = $this->session->userdata('user_id');
        $this->db->insert('project', $params);
    }

    public function edit($post)
    {

        $params['title'] = $post['title'];
        $params['subtitle'] = $post['subtitle'];
        $params['description'] = $post['desc'];
        $params['category_id'] = $post['category'];
        $params['subcat_id'] = $post['subcat'];
        $params['location_id'] = $post['location'];
        $params['goal'] = $post['goal'];

        if (isset($post['standar'])) {
            $params['duration'] = $post['standar'];
        }
        if (isset($post['custom'])) {
            $params['duration'] = $post['custom'];
        }

        $this->db->where('project_id', $post['project_id']);
        $this->db->update('project', $params);
    }


    public function get_by_projectid($id)
    {
        $this->db->from('project');
        $this->db->where('project_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete_image($where)
    {
        $this->db->set('image', 'default.jpg');
        $this->db->where('project_id', $where);
        $this->db->update('project');
    }

    public function delete_video($where)
    {
        $this->db->set('video', 'default.mp4');
        $this->db->where('project_id', $where);
        $this->db->update('project');
    }


    public function getRevition($id)
    {
        $this->db->from('verification');
        $this->db->where('project_id', $id);
        $this->db->order_by('created', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function getRejected($id)
    {
        $this->db->from('verification');
        $this->db->where('project_id', $id);
        $this->db->where('type', 'rejected');
        $query = $this->db->get()->row();
        return $query;
    }

    public function getDuration($id)
    {
        $this->db->select('duration');
        $this->db->where('project_id', $id);
        $query = $this->db->get('project');
        return $query->row();
    }
}
