<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('auth/login');
	}
	public function masuk_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->login_m->cek_login("user_login", $where)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("buku"));
		} else {
			echo "Username dan password salah!!!";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
