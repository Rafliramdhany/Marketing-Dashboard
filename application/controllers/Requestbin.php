<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestbin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requestview_m');
    }

    public function index()
    {
        $data['row'] = $this->requestview_m->get();
        $data['request_add'] = $this->db->get_where('request_add', ['request_id'])->row_array();
        $this->template->load('template', 'requestbin', $data);
    }
}
