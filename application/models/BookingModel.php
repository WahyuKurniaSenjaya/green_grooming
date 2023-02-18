<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookingModel extends CI_Model
{
	protected $table = "t_booking";

	function dt_booking()
	{
		return $this->db->get($this->table)->result();
	}

	function get_kode_booking()
	{
		$q = $this->db->query("SELECT
        MAX( RIGHT ( t_booking.id_booking, 3 ) ) AS kd_max 
        FROM
        t_booking 
        WHERE
        SUBSTR( t_booking.created_at, 1, 10 ) = CURDATE( )");
		$kd = "";

		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int) $k->kd_max) + 1;
				$kd = sprintf("%03s", $tmp);
			}
		} else {
			$kd = "001";
		}
		return 'BK' . date('ymd') . $kd;
	}
}
