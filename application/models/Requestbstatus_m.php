<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requestbstatus_m extends CI_Model
{
    public $table = 'data_request';

    function show_barang2()
    {
        $hasil = $this->db->query("SELECT * FROM data_request ORDER BY request_id DESC LIMIT 6");
        return $hasil;
    }

    function show_barang()
    {
        $hasil = $this->db->query("SELECT * FROM data_request ORDER BY request_id DESC");
        return $hasil;
    }

    function step3($no_tiket, $no_pr, $status_pr)
    {
        $hasil = $this->db->query("UPDATE data_request SET no_pr='$no_pr', status_pr='$status_pr' WHERE no_tiket='$no_tiket'");
        return $hasil;
    }

    function step5($no_tiket, $delivery_date, $no_bast, $good_receipt)
    {
        $hasil = $this->db->query("UPDATE data_request SET delivery_date='$delivery_date', no_bast='$no_bast', good_receipt='$good_receipt' WHERE no_tiket='$no_tiket'");
        return $hasil;
    }

    function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
