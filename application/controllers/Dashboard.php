<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
			"content" => "dashboard/index",
			"artikel" => $this->db->get('m_artikel')->result()
		];
		$this->load->view('layout/main', $data);
	}
}
