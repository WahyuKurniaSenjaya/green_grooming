<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('secure');
		$this->load->model("PelangganModel");
	}

	public function index()
	{
		$data = [
			"title" => "Pelanggan",
			"pages" => "index",
			"content" => "pelanggan/index",
			"js" => "pelanggan/js"
		];
		$this->load->view('layout/main', $data);
	}

	function dt_pelanggan()
	{
		$data['data'] = $this->PelangganModel->dt_pelanggan();
		echo json_encode($data);
	}

	function checkUsername()
	{
		$username = $_POST['username'];
		$data['data'] = $this->db->query("SELECT COUNT(id) AS jml FROM user WHERE username = '$username'")->row();
		echo json_encode($data);
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

	public function update()
	{
		if ($_POST['id']) {
			$jasa = [
				'username' => $_POST['username'],
				'password' => $this->secure->encrypt_url($_POST['password']),
				'nama'     => $_POST['nama'],
				'phone'    => $_POST['phone'],
				'alamat'   => $_POST['alamat']
			];
			$data['update'] = $this->db->where('id', $_POST['id'])->update('user', $jasa);
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}

	public function hapus()
	{
		if ($_POST['id']) {
			$data['delete'] = $this->db->where('id', $_POST['id'])->delete('user');
		} else {
			$data['delete'] = '';
		}
		echo json_encode($data);
	}
}
