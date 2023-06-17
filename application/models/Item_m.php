<?php

class Item_m extends CI_Model
{
    function get($id)
    {
        $this->db->where('project_id', $id);
        $query =  $this->db->get('reward_item');
        return $query;
    }


    function get_id($id)
    {
        $this->db->from('reward_item');
        $this->db->select('reward_item_id');
        $this->db->where('item_name', $id);
        $query =  $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->reward_item_id;
        } else {
            return NULL;
        }
    }

    function get_id_from_dtl($rid, $name)
{
    $this->db->select('*');
    $this->db->from('reward_detail');
    $this->db->join('reward_item', 'reward_detail.reward_item_id = reward_item.reward_item_id');
    $this->db->where('reward_id', $rid);
    $this->db->where('reward_item.item_name', $name);
    $query = $this->db->get();
    $result = $query->row();
    return $result->reward_item_id;

    // if ($query->num_rows() > 0) {
    //     $result = $query->row();
    //     return $result->reward_id; // Return the reward_id field from the query result
    // } else {
    //     return NULL;
    // }
}



    function get_temp($params = null)
    {
        $this->db->from('item_temp');
        if ($params != null) {
            $this->db->where($params);
        }
        $query = $this->db->get();
        return $query;
    }


    function get_submit_item($reward_id, $reward_item_id)
    {
        $this->db->from('reward_detail');
        $this->db->where('reward_id', $reward_id);
        $this->db->where('reward_item_id', $reward_item_id);
        $query = $this->db->get();
        return $query;
    }

    function add($data)
    {
        $this->db->insert('reward_item', $data);
    }

    function edit($data)
    {
        $this->db->set('item_name', $data);
        $this->db->where('project_id', $data);
        $this->db->update('reward_item');
    }

    function add_temp($name, $id, $pid)
    {
        $temp = array('reward_item_id' => $id, 'item_name' => $name, 'qty' => 1, 'project_id' => $pid);
        $this->db->insert('item_temp', $temp);
    }


    function add_submit_item($reward_id, $item_id, $qty)
    {
        $data = array('reward_id' => $reward_id, 'reward_item_id' => $item_id, 'qty' => $qty);
        $this->db->insert('reward_detail', $data);
    }

    function update_temp($data)
    {
        $this->db->set('qty', 'qty + 1', false);
        $this->db->where('item_name', $data);
        $this->db->update('item_temp');
    }

    function update_submit_item($reward_id, $reward_item_id)
    {
        $this->db->set('qty', 'qty + 1', false);
        $this->db->where('reward_id', $reward_id);
        $this->db->where('reward_item_id', $reward_item_id);
        $this->db->update('reward_detail');
    }

    public function update($id, $nama)
    {
        $this->db->set('item_name', $nama);
        $this->db->where('reward_item_id', $id);
        $this->db->update('reward_item');
    }

    function del_temp($data)
    {
        $this->db->where('project_id', $data);
        $this->db->delete('item_temp');
    }
}
