<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArtikelModel extends CI_Model
{
	protected $table = "m_artikel";

	function dt_artikel()
	{
		return $this->db->get($this->table)->result();
	}
}
