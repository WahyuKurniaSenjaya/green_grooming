<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('secure');
		$this->load->model('UserModel');
	}
	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				"title" => "Login Page",
			];
			$this->load->view('auth/login');
		} else {
			$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
			$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
			$this->checkUsernameAndPassword($username, $password);
		}
	}

	function checkUsernameAndPassword($username, $password)
	{
		$url = base_url();
		$query = $this->UserModel->checkUsername($username);
		if (!$query) {
			$this->sweet_alert_gagal('Username anda salah!');
			redirect($url);
		} else {
			$dataUser = $query->row_array();
			// $decryptPassword =  $dataUser['password'];
			$decryptPassword =  $this->secure->decrypt_url($dataUser['password']);
			if ($decryptPassword == $password) {
				// create user session
				$this->session->set_userdata('ses_masuk', TRUE);
				$this->session->set_userdata('ses_id', $dataUser['id']);
				$this->session->set_userdata('ses_name', $dataUser['nama']);
				$this->session->set_userdata('ses_username', $dataUser['username']);
				$this->session->set_userdata('ses_type', $dataUser['type']);
				$url = base_url() . "dashboard";
				$this->sweet_alert_berhasil("Selamat Datang");
				redirect($url);
			} else {
				$this->sweet_alert_gagal('Password anda salah!');
				redirect($url);
			}
		}
	}

	public function changePassword()
	{
		$where = [
			'username' => $this->session->userdata('ses_username')
		];
		$hasilEnkripsi = $this->secure->encrypt_url($this->input->POST('password'));

		$data = [
			'password' => $hasilEnkripsi,
		];

		$perintahSql = $this->UserModel->update_password($data, $where);
		if ($perintahSql == true) {
			$this->sweet_alert_berhasil("Ganti Password");
			redirect('dashboard');
		} else {
			$this->sweet_alert_gagal("Gagal ganti password");
			redirect('dashboard');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('ses_masuk');
		$this->session->unset_userdata('ses_username');
		$this->session->unset_userdata('ses_name');
		$this->sweet_alert_berhasil("Anda berhasil logout");
		$url = base_url();
		redirect($url);
	}

	function sweet_alert_gagal($pesan)
	{
		$msg = $this->session->set_flashdata('pesan', '
    <script>
		swal({
			title: "Oops!",
			text: "' . $pesan . '",
			icon: "error",
		});
    </script>
        ');
		return $msg;
	}
	function sweet_alert_berhasil($pesan)
	{
		$msg = $this->session->set_flashdata('pesan', '
    <script>
		swal({
			title: "Berhasil!",
			text: "' . $pesan . '",
			icon: "success",
		});
    </script>
        ');
		return $msg;
	}
}
