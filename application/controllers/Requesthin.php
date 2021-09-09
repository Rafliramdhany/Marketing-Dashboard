<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requesthin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requesthin_m');
    }

    function index()
    {
        $x['data'] = $this->requesthin_m->show_barang();
        $this->template->load('template', 'requesthin', $x);
    }

    function step4()
    {
        $no_tiket = $this->input->post('no_tiket');
        $no_po = $this->input->post('no_po');
        $this->requesthin_m->step4($no_tiket, $no_po);
        redirect('requesthin');
    }
}
