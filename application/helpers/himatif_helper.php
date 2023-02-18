<?php

//security untuk administrator
function login_admin(){
	$ci = get_instance();

	if ($ci->session->userdata('level') != "administrator") {
		redirect('admin');
	}

	if (!$ci->session->userdata('status_login')) {
		redirect('admin');
	}
}

//security untuk peserta
function login_anggota(){
	$ci = get_instance();

	if ($ci->session->userdata('level') != "anggota") {
		redirect('login');
	}

	if (!$ci->session->userdata('status_login')) {
		redirect('login');
	}
}

?>