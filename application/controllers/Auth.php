<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, Login Berhasil');
					window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('Login Gagal, Username/Password Salah');
					window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

	public function register()
	{
		$this->load->view('register');
	}
	public function add()
	{
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		$this->form_validation->set_rules(
			'passconf',
			'Konfirmasi Password',
			'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 6 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->registeradd($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan');
			}
			redirect('auth/login');
		}
	}
}
