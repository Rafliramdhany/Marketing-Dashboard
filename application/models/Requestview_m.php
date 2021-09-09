<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requestview_m extends CI_Model
{
    public $table = 'request_add';

    function show_barang()
    {
        $u = $this->fungsi->user_login()->name;
        $hasil = $this->db->query("SELECT * FROM request_add WHERE user = '$u'");
        return $hasil;
    }

    public function get($user = null)
    {
        $this->db->from('request_add');
        if ($user != null) {
            $this->db->where('user', $this->fungsi->user_login()->username);
        }
        $query = $this->db->get();
        return $query;
    }

    function total_rows($q = NULL)
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
