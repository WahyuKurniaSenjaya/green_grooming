<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PelangganModel extends CI_Model
{
	protected $table = "user";

	function dt_pelanggan()
	{
		return $this->db->query("SELECT * FROM user WHERE `type` != '1'")->result();
	}
}
