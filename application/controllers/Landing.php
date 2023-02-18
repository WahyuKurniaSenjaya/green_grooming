<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model("Homepage");
	}

	public function index()
	{
		$data = [
			"title" => "Green Grooming",
			"pages" => "index",
			"jasa" => $this->db->get('m_jasa')->result(),
		];
		// $this->load->view('layout/header', $data);
		$this->load->view('landing/index', $data);
		// $this->load->view('layout/footer');
	}
}
