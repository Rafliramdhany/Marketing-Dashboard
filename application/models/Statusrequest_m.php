<?php defined('BASEPATH') or exit('No direct script access allowed');

class Statusrequest_m extends CI_Model
{
    function show_barang()
    {
        $u = $this->fungsi->user_login()->name;
        $hasil = $this->db->query("SELECT * FROM data_request WHERE user = '$u'");
        return $hasil;
    }

    public function get($request_id = null)
    {
        $this->db->from('data_request');
        if ($request_id != null) {
            $this->db->where('request_id', $request_id);
        }
        $query = $this->db->get();
        return $query;
    }
}
