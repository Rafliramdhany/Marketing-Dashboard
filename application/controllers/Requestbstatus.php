<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestbstatus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requestbstatus_m');
    }

    function index()
    {
        $x['data'] = $this->requestbstatus_m->show_barang();
        $this->template->load('template', 'requestbstatus', $x);
    }

    function step3()
    {
        $no_tiket = $this->input->post('no_tiket');
        $no_pr = $this->input->post('no_pr');
        $status_pr = $this->input->post('status_pr');
        $this->requestbstatus_m->step3($no_tiket, $no_pr, $status_pr);
        redirect('requestbstatus');
    }

    function step5()
    {
        $no_tiket = $this->input->post('no_tiket');
        $delivery_date = $this->input->post('delivery_date');
        $no_bast = $this->input->post('no_bast');
        $good_receipt = $this->input->post('good_receipt');
        $this->requestbstatus_m->step5($no_tiket, $delivery_date, $no_bast, $good_receipt);
        redirect('requestbstatus');
    }
}
