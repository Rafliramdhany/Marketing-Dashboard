<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requestadd_m extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('request_add');
    }

    function input_data($data, $request_add)
    {
        $this->db->insert($request_add, $data);
        $this->session->set_flashdata('success', 'Permintaan Terkirim');
    }
}
