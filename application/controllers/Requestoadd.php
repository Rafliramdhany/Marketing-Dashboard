<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestoadd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('requesthin_m');
    }

    function index()
    {
        $x['data'] = $this->requesthin_m->show_barang();
        $this->template->load('template', 'requestoadd', $x);
    }
}
