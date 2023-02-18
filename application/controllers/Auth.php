<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('secure');
	}

	public function login()
	{
		$data = [
			"title" => "Login Page",
		];
		$this->load->view('auth/login');
	}

	public function simpan()
	{
		$jasa = [
			'username' => $_POST['username'],
			'password' => $this->secure->encrypt_url($_POST['password']),
			'type' 	   => 2,
			'nama'     => $_POST['nama'],
			'phone'    => $_POST['phone'],
			'alamat'   => $_POST['alamat']
		];
		$data['simpan'] = $this->db->insert('user', $jasa);
		echo json_encode($data);
	}
}
