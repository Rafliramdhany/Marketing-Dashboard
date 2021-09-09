<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requesthin_m');
    }

    function index()
    {
        $x['data'] = $this->requesthin_m->show_barang();
        $this->template->load('template', 'reports', $x);
    }

    function print($request_id)
    {
        $data['row'] = $this->requesthin_m->get($request_id)->row();
        $html = $this->load->view('printinvoice', $data, true);
        $this->fungsi->PdfGenerator($html, 'invoice-' . $data['row']->no_tiket, 'A4', 'landscape');
    }
}
