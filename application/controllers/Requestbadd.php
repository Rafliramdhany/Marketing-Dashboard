<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestbadd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requestbadd_m');
    }

    public function index()
    {
        $data['data_request'] = $this->requestbadd_m->tampil_data();
        $this->template->load('template', 'requestbadd', $data);
    }

    function tambah()
    {
        $this->load->view('requestbadd');
    }

    function process()
    {
        $no_tiket = $this->input->post('no_tiket');
        $user = $this->input->post('user');
        $material = $this->input->post('material');
        $qty = $this->input->post('qty');
        $status = $this->input->post('status');

        $data = array(
            'no_tiket' => $no_tiket,
            'user' => $user,
            'material' => $material,
            'qty' => $qty,
            'status' => 'incompleted',
        );
        $this->requestbadd_m->input_data($data, 'data_request');
        redirect('requestbadd');
    }

    function edit()
    {
        $no_tiket = $this->input->post('no_tiket');
        $user = $this->input->post('user');
        $material = $this->input->post('material');
        $qty = $this->input->post('qty');

        $data = array(
            'no_tiket' => $no_tiket,
            'user' => $user,
            'material' => $material,
            'qty' => $qty,
        );
        $this->requestbadd_m->edit_data($data, 'data_request');
        redirect('requestbstatus');
    }
}
