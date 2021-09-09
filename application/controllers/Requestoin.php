<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestoin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requestoin_m');
    }

    function index()
    {
        $x['data'] = $this->requestoin_m->show_barang();
        $this->template->load('template', 'requestoin', $x);
    }

    function step2()
    {
        $no_tiket = $this->input->post('no_tiket');
        $harga_satuan = $this->input->post('harga_satuan');
        $this->requestoin_m->step2($no_tiket, $harga_satuan);
        redirect('requestoin');
    }

    function step6()
    {
        $no_tiket = $this->input->post('no_tiket');
        $no_rks = $this->input->post('no_rks');
        $no_spk = $this->input->post('no_spk');
        $no_invoice = $this->input->post('no_invoice');
        $status = 'completed';
        $this->requestoin_m->step6($no_tiket, $no_rks, $no_spk, $no_invoice, $status);
        redirect('requestoin');
    }
}
