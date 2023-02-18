<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("JasaModel");
	}

	public function index()
	{
		$id = $this->session->userdata('ses_id');
		$profile = $this->db->query("SELECT * FROM user WHERE id='$id'")->row();
		$data = [
			"title" => "Green Grooming",
			"pages" => "index",
			"content" => "profile/index",
			"js" => "profile/js",
			"profile" => $profile
		];
		$this->load->view('layout/main', $data);
	}
}
