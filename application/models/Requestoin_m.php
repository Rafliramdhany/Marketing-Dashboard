<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requestoin_m extends CI_Model
{
    function show_barang()
    {
        $hasil = $this->db->query("SELECT * FROM data_request");
        return $hasil;
    }

    function step2($no_tiket, $harga_satuan)
    {
        $hasil = $this->db->query("UPDATE data_request SET harga_satuan='$harga_satuan' WHERE no_tiket='$no_tiket'");
        return $hasil;
    }

    function step6($no_tiket, $no_rks, $no_spk, $no_invoice, $status)
    {
        $hasil = $this->db->query("UPDATE data_request SET no_rks='$no_rks', no_spk='$no_spk', no_invoice='$no_invoice', status='$status' WHERE no_tiket='$no_tiket'");
        return $hasil;
    }
}
