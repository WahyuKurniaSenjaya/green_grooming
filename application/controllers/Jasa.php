<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("JasaModel");
	}

	public function index()
	{
		$data = [
			"title" => "Green Grooming",
			"pages" => "index",
			"content" => "jasa/index",
			"js" => "jasa/js"
		];
		$this->load->view('layout/main', $data);
	}

	function dt_jasa()
	{
		$data['data']         = $this->JasaModel->dt_jasa();
		echo json_encode($data);
	}

	public function simpan()
	{
		$jasa = [
			'nama'     => $_POST['nama'],
			'deskripsi'     => $_POST['deskripsi'],
			'harga'     => $_POST['harga']
		];
		$data['simpan'] = $this->db->insert('m_jasa', $jasa);
		echo json_encode($data);
	}

	public function update()
	{
		if ($_POST['id']) {
			$jasa = [
				'nama'     => $_POST['nama'],
				'deskripsi'     => $_POST['deskripsi'],
				'harga'     => $_POST['harga']
			];
			$data['update'] = $this->db->where('id', $_POST['id'])->update('m_jasa', $jasa);
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}

	public function hapus()
	{
		if ($_POST['id']) {
			$data['update'] = $this->db->where('id', $_POST['id'])->delete('m_jasa');
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}
}
