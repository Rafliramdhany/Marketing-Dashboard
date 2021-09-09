<?php defined('BASEPATH') or exit('No direct script access allowed');

class Requestbadd_m extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('data_request');
    }

    function input_data($data, $data_request)
    {
        $this->db->insert($data_request, $data);
        $this->session->set_flashdata('success', 'Data Diteruskan');
    }

    function edit_data($data, $data_request)
    {
        $this->db->update($data_request, $data);
    }
}
