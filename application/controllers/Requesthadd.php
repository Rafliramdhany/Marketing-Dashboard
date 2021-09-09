<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requesthadd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requesthin_m');
    }

    function index()
    {
        $x['data'] = $this->requesthin_m->show_barang();
        $this->template->load('template', 'requesthadd', $x);
    }

    function print($request_id)
    {
        $data['row'] = $this->requesthin_m->get($request_id)->row();
        $this->template->load('template', 'printinvoice', $data);
        // $this->fungsi->PdfGenerator($html, 'invoice-' . $data['row']->no_tiket, 'A4', 'landscape');
    }
}
