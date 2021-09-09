<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public $table = 'user';

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
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
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];
        $params['image'] = 'default.jpg';
        $params['hobi'] = null;
        $this->db->insert('user', $params);
    }

    public function edit($post)
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];
        if (!empty($post['image'])) {
            $params['image'] = $post['image'];
        }
        $params['hobi'] = implode(",", $post['hobi1']);
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function show_user()
    {
        $hasil = $this->db->query("SELECT * FROM user ORDER BY user_id DESC LIMIT 8");
        return $hasil;
    }
    public function registeradd($post)
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['level'] = '5';
        $params['image'] = 'default.jpg';
        $params['hobi'] = null;
        $this->db->insert('user', $params);
    }
}
