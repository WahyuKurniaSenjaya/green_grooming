<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JasaModel extends CI_Model
{
	protected $table = "m_jasa";

	function dt_jasa()
	{
		return $this->db->get($this->table)->result();
	}
}
