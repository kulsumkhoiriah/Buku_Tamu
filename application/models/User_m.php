<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        $params['password'] = md5($post['password']);
        $params['departemen'] = strtoupper($post['departemen']) != "" ? strtoupper($post['departemen']) : null;
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }
    public function edit($post)
    {
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }
        $params['departemen'] = $post['departemen'] != "" ? $post['departemen'] : null;
        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }
    public function update($data, $where)
    {
        return $this->db->update('user', $data, $where);
    }
    public function edit_data($where, $table)
    {
        return  $this->db->get_where($table, $where);
    }
    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
    public function departemen()
    {
        $query = $this->db->query("SELECT DISTINCT departemen FROM user");
        return $query;
    }
}
