<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_m');
		$this->load->model('requestview_m');
		$this->load->model('requestbstatus_m');
		$this->load->model('user_m');
	}

	public function index()
	{
		check_not_login();
		$data['a'] = $this->requestview_m->total_rows();
		$data['b'] = $this->requestbstatus_m->total_rows();
		$data['c'] = $this->user_m->total_rows();
		$data['d'] = $this->user_m->total_rows();
		$data['graph'] = $this->dashboard_m->graph();
		$data['x'] = $this->requestbstatus_m->show_barang2();
		$data['u'] = $this->user_m->show_user();
		$level = $this->fungsi->user_login()->level;
		if ($level == '1') {
			$this->template->load('template', 'dashboard', $data);
		} elseif ($level == '2') {
			redirect('requestbin');
		} elseif ($level == '3') {
			redirect('requestoin');
		} elseif ($level == '4') {
			redirect('requesthin');
		} elseif ($level == '5') {
			redirect('requestadd');
		}
	}

	public function newrequest()
	{
		$a = $this->requestview_m->total_rows();
		$result['a'] = $a;
		echo json_encode($result);
	}

	public function requestadd()
	{
		$b = $this->requestbstatus_m->total_rows();
		$result['b'] = $b;
		echo json_encode($result);
	}

	public function user()
	{
		$c = $this->user_m->total_rows();
		$result['c'] = $c;
		echo json_encode($result);
	}

	public function completed()
	{
		$d = $this->reports_m->total_rows();
		$result['d'] = $d;
		echo json_encode($result);
	}
	public function grafik()
	{
		$sql = "SELECT date(created) as created, count(*) as jml from data_request group by date(created) order by 1;";
		$a = $this->db->query($sql)->result();
		echo json_encode($a);
	}
}
