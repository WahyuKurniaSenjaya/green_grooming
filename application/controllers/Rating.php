<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
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
			"title" => "Rating",
			"pages" => "index",
			"content" => "rating/index",
			"js" => "rating/js",
			"rating" => $this->db->query("SELECT r.id_rating, r.id_booking, r.rating, r.ulasan, b.tgl_booking, b.total,
										p.nama AS nama_pelanggan,
										j.nama AS nama_jasa
										FROM t_rating r
										LEFT JOIN t_booking b ON b.id_booking = r.id_booking
										LEFT JOIN `user` p ON b.id_pelanggan = p.id
										LEFT JOIN m_jasa j ON b.id_jasa = j.id 
										ORDER BY b.tgl_booking DESC")->result()
		];
		$this->load->view('layout/main', $data);
	}
}
