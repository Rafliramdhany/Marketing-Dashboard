<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requesthin_m extends CI_Model
{
    function show_barang()
    {
        $hasil = $this->db->query("SELECT * FROM data_request");
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

    function step4($no_tiket, $no_po)
    {
        $hasil = $this->db->query("UPDATE data_request SET no_po='$no_po' WHERE no_tiket='$no_tiket'");
        return $hasil;
    }
}
