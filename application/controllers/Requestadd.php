<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestadd extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('requestadd_m');
	}

	public function index()
	{
		$data['request_add'] = $this->requestadd_m->tampil_data()->result();
		$this->template->load('template', 'requestadd', $data);
	}

	function tambah()
	{
		$this->load->view('requestadd');
	}

	function process()
	{
		$to = $this->input->post('to');
		$user = $this->input->post('user');
		$barang = $this->input->post('barang');
		$qty = $this->input->post('qty');
		$message = $this->input->post('message');

		$data = array(
			'to' => $to,
			'user' => $user,
			'barang' => $barang,
			'qty' => $qty,
			'message' => $message,
		);
		$this->requestadd_m->input_data($data, 'request_add');
		redirect('requestadd');
	}
}
