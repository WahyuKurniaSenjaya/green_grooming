<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("BookingModel");
	}

	public function index()
	{
		$id = $this->session->userdata('ses_id');
		$profile = $this->db->query("SELECT * FROM user WHERE id='$id'")->row();
		$jasa = $this->db->query("SELECT * FROM m_jasa")->result();
		$data = [
			"title" => "Booking",
			"pages" => "index",
			"content" => "booking/index",
			"js" => "booking/js",
			"profile" => $profile,
			"jasa" => $jasa
		];
		$this->load->view('layout/main', $data);
	}

	public function history()
	{
		$id = $this->session->userdata('ses_id');
		$profile = $this->db->query("SELECT * FROM user WHERE id='$id'")->row();
		$jasa = $this->db->query("SELECT * FROM m_jasa")->result();

		$data = [
			"title" => "History",
			"pages" => "history",
			"content" => "booking/history",
			"js" => "booking/history_js",
			"profile" => $profile,
			"jasa" => $jasa
		];
		$this->load->view('layout/main', $data);
	}

	public function dt_history()
	{
		$type = $this->session->userdata('ses_type');
		$id_pelanggan = $this->session->userdata('ses_id');
		if ($type == 1) {
			$condition = '';
		} else {
			$condition = "WHERE id_pelanggan ='$id_pelanggan'";
		}
		$booking = $this->db->query("SELECT 
		b.id_booking,
		b.id_pelanggan,
		u.nama AS nama_pelanggan,
		u.phone,
		u.alamat,
		b.id_jasa,
		j.nama AS nama_jasa,
		b.tgl_booking,
		b.jam_booking,
		b.total,
		b.status,
		b.tipe_booking,
		b.nota,
		b.catatan
		FROM t_booking b 
		LEFT JOIN user u ON u.id = b.id_pelanggan
		LEFT JOIN m_jasa j ON j.id = b.id_jasa 
		$condition")->result();
		$data['data'] = $booking;
		echo json_encode($data);
	}


	public function bayar($kode_booking)
	{
		$id = $this->session->userdata('ses_id');
		$profile = $this->db->query("SELECT * FROM user WHERE id='$id'")->row();
		$jasa = $this->db->query("SELECT * FROM m_jasa")->result();
		$booking = $this->db->query("SELECT 
		b.id_booking,
		b.id_pelanggan,
		u.nama AS nama_pelanggan,
		u.phone,
		u.alamat,
		b.id_jasa,
		j.nama AS nama_jasa,
		b.tgl_booking,
		b.jam_booking,
		b.total,
		b.catatan
		FROM t_booking b 
		LEFT JOIN user u ON u.id = b.id_pelanggan
		LEFT JOIN m_jasa j ON j.id = b.id_jasa
		WHERE id_booking='$kode_booking'")->row();
		$data = [
			"title" => "Booking",
			"pages" => "index",
			"content" => "booking/bayar",
			"js" => "booking/js",
			"profile" => $profile,
			"jasa" => $jasa,
			"booking" => $booking
		];
		$this->load->view('layout/main', $data);
	}

	public function detail($kode_booking)
	{
		$id = $this->session->userdata('ses_id');
		$profile = $this->db->query("SELECT * FROM user WHERE id='$id'")->row();
		$jasa = $this->db->query("SELECT * FROM m_jasa")->result();
		$booking = $this->db->query("SELECT 
		b.id_booking,
		b.status,
		b.id_pelanggan,
		u.nama AS nama_pelanggan,
		u.phone,
		u.alamat,
		b.id_jasa,
		j.nama AS nama_jasa,
		b.tgl_booking,
		b.jam_booking,
		b.total,
		b.catatan
		FROM t_booking b 
		LEFT JOIN user u ON u.id = b.id_pelanggan
		LEFT JOIN m_jasa j ON j.id = b.id_jasa
		WHERE id_booking='$kode_booking'")->row();
		$data = [
			"title" => "Booking",
			"pages" => "index",
			"content" => "booking/detail",
			"js" => "booking/js",
			"profile" => $profile,
			"jasa" => $jasa,
			"booking" => $booking
		];
		$this->load->view('layout/main', $data);
	}

	public function upload_nota()
	{
		if ($_POST['id_booking']) {
			$id_booking = $_POST['id_booking'];
			$data['id_booking'] = $id_booking;
			$foto = $_FILES['foto']['name'];
			if ($foto) {
				$config['upload_path']          = 'assets/uploads/nota/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['max_size']             = 2048;
				$new_name = str_replace(' ', '_', rand() . "_" . $_FILES['foto']['name']);
				$config['file_name'] = $new_name;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$uploadImage = $this->upload->do_upload('foto');
				if (!$uploadImage) {
					$data['upload_image'] = $uploadImage;
				} else {
					$nota = [
						'status'      => 2,
						'nota'        => $new_name
					];
					$data['upload_image'] = $uploadImage;
					$data['update'] = $this->db->where('id_booking', $id_booking)->update('t_booking', $nota);
				}
			} else {
				$data['update'] = '';
			}
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}

	function dt_booking()
	{
		$data['data']         = $this->BookingModel->dt_booking();
		echo json_encode($data);
	}

	public function simpan()
	{
		$kode_booking = $this->BookingModel->get_kode_booking();
		$booking = [
			'id_booking'   => $kode_booking,
			'id_pelanggan' => $_POST['id_pelanggan'],
			'id_jasa'      => $_POST['jenis_layanan'],
			'tipe_booking'      => $_POST['tipe_layanan'],
			'tgl_booking'  => $_POST['tgl_booking'],
			'jam_booking'  => $_POST['jam_booking'],
			'total'        => $_POST['harga'],
			'catatan'      => $_POST['catatan'],
			'status'      => 1,
			'created_at'   => date("Y-m-d")
		];
		$data['simpan'] = $this->db->insert('t_booking', $booking);
		redirect(base_url() . "booking/bayar/" . $kode_booking);
	}

	public function submit_rating()
	{
		$rating = [
			'id_booking'   => $_POST['id_booking'],
			'rating' => $_POST['rating'],
			'ulasan'      => $_POST['ulasan'],
		];
		$data['simpan'] = $this->db->insert('t_rating', $rating);
		echo json_encode($data);
	}

	public function update_status()
	{
		if ($_POST['id_booking']) {
			$booking = [
				'status'     => $_POST['status']
			];
			$data['update'] = $this->db->where('id_booking', $_POST['id_booking'])->update('t_booking', $booking);
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}

	public function hapus()
	{
		if ($_POST['id_booking']) {
			$data['update'] = $this->db->where('id_booking', $_POST['id_booking'])->delete('t_booking');
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}
}
