<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	protected $table = "user";

	function checkUsername($username)
	{
		$query = $this->db->query("Select * from user where username='$username' limit 1");
		return $query;
	}

	function update_password($data, $where)
	{
		$this->db->where($where);
		$query = $this->db->update($this->table, $data);
		return $query;
	}
}
