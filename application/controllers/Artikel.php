<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ArtikelModel");
	}

	public function index()
	{
		$data = [
			"title" => "Green Grooming",
			"pages" => "index",
			"content" => "artikel/index",
			"js" => "artikel/js"
		];
		$this->load->view('layout/main', $data);
	}

	function dt_artikel()
	{
		$data['data']         = $this->ArtikelModel->dt_artikel();
		echo json_encode($data);
	}

	public function simpan()
	{
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$foto = $_FILES['foto']['name'];
		if ($foto) {
			$config['upload_path']          = 'assets/uploads/artikel/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2048;
			// $config['encrypt_name']         = true;
			$new_name = str_replace(' ', '_', rand() . "_" . $_FILES['foto']['name']);
			$config['file_name'] = $new_name;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$uploadImage = $this->upload->do_upload('foto');
			if (!$uploadImage) {
				$data['upload_image'] = $uploadImage;
			} else {
				$artikel = [
					'judul'       => $judul,
					'deskripsi'   => $deskripsi,
					'foto'        => $new_name
				];
				$data['upload_image'] = $uploadImage;
				$data['simpan'] = $this->db->insert('m_artikel', $artikel);
			}
		} else {
			$data['foto'] = 'tidak ada foto';
		}
		echo json_encode($data);
	}

	public function update()
	{
		if ($_POST['id']) {
			$id = $_POST['id'];
			$judul = $this->input->post('judul', true);
			$deskripsi = $this->input->post('deskripsi', true);
			$foto = $_FILES['foto']['name'];
			if ($foto) {
				$config['upload_path']          = 'assets/uploads/artikel/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['max_size']             = 2048;
				$new_name = str_replace(' ', '_', rand() . "_" . $_FILES['foto']['name']);
				$config['file_name'] = $new_name;
				$this->load->library('upload', $config);
				$old_data = $this->db->query("SELECT foto FROM m_artikel WHERE id='$id'")->row();
				$old_data_foto = $old_data->foto;
				$pathFoto = 'assets/uploads/artikel/' . $old_data_foto;
				if (file_exists($pathFoto)) {
					if (unlink($pathFoto)) {
						$this->upload->initialize($config);
						$uploadImage = $this->upload->do_upload('foto');
						if (!$uploadImage) {
							$data['upload_image'] = $uploadImage;
						} else {
							$artikel = [
								'judul'       => $judul,
								'deskripsi'   => $deskripsi,
								'foto'        => $new_name
							];
							$data['upload_image'] = $uploadImage;
							$data['update'] = $this->db->where('id', $_POST['id'])->update('m_artikel', $artikel);
						}
					}
				} else {
					$this->upload->initialize($config);
					$uploadImage = $this->upload->do_upload('foto');
					$artikel = [
						'judul'       => $judul,
						'deskripsi'   => $deskripsi,
						'foto'        => $new_name
					];
					$data['update'] = $this->db->where('id', $_POST['id'])->update('m_artikel', $artikel);
				}
			} else {
				$artikel = [
					'judul'       => $judul,
					'deskripsi'   => $deskripsi
				];
				$data['update'] = $this->db->where('id', $_POST['id'])->update('m_artikel', $artikel);
			}
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}

	public function hapus()
	{
		if ($_POST['id']) {
			$id = $_POST['id'];
			$old_data = $this->db->query("SELECT foto FROM m_artikel WHERE id='$id'")->row();
			$old_data_foto = $old_data->foto;
			$pathFoto = 'assets/uploads/artikel/' . $old_data_foto;
			if (file_exists($pathFoto)) {
				if (unlink($pathFoto)) {
					$data['update'] = $this->db->where('id', $_POST['id'])->delete('m_artikel');
				}
			} else {
				$data['update'] = $this->db->where('id', $_POST['id'])->delete('m_artikel');
			}
		} else {
			$data['update'] = '';
		}
		echo json_encode($data);
	}
}
