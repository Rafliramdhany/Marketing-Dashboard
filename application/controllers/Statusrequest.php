<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statusrequest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('statusrequest_m');
    }

    function index()
    {
        $x['data'] = $this->statusrequest_m->show_barang();
        $this->template->load('template', 'statusrequest', $x);
    }

    function print($request_id)
    {
        $data['row'] = $this->statusrequest_m->get($request_id)->row();
        $html = $this->load->view('printinvoice', $data, true);
        $this->fungsi->PdfGenerator($html, 'invoice-' . $data['row']->no_tiket, 'A4', 'landscape');
    }
}
