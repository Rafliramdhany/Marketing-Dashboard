<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function graph()
    {
        $data = $this->db->query("SELECT * from request_add, user");
        return $data->result();
    }
}
