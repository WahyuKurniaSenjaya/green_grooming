<script>
	function modal_add() {
		$("#modal_add").modal('show');
	}

	function simpan() {
		swal({
				title: "Simpan Data ?",
				text: "Apakah anda yakin!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willSave) => {
				if (willSave) {
					let username = document.getElementById('username').value;
					let password = document.getElementById('password').value;
					let nama = document.getElementById('nama').value;
					let phone = document.getElementById('phone').value;
					let alamat = document.getElementById('alamat').value;
					if (username == '' || username == null) {
						$("#msgUsername").removeClass("hide");
					} else if (password == '' || password == null) {
						$("#msgPassword").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (nama == '' || nama == null) {
						$("#msgNama").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (phone == '' || phone == null) {
						$("#msgPhone").removeClass("hide");
						validationGagal('Phone')
					} else if (alamat == '' || alamat == null) {
						$("#msgAlamat").removeClass("hide");
						validationGagal('Alamat')
					} else {
						form = $('#formAdd');
						$.ajax({
							'url': `${base_url}pelanggan/simpan`,
							'type': 'POST',
							'dataType': 'json',
							'data': form.serialize(),
							'success': function(response) {
								form[0].reset();
								dt_pelanggan();
								$(`#msgUsernameValid`).addClass('hide');
							},
							'error': function(err) {
								console.log(JSON.stringify(err));
							},
							'complete': function(response) {
								swal("Proses simpan berhasil!", {
									icon: "success",
								});
							}
						});
					}
				} else {
					swal("Proses simpan dibatalkan!", {
						icon: "warning",
					});
				}
			});
	}

	function validationGagal(inputName) {
		swal({
			title: "Gagal!",
			text: `${inputName} Tidak Boleh Kosong!`,
			icon: "error",
			button: "Tutup!",
		});
	}

	function validationUsername() {
		username = $(`#username`).val();
		$.ajax({
			'url': `${base_url}pelanggan/checkUsername`,
			'type': 'POST',
			'dataType': 'json',
			'data': {
				username: username
			},
			'success': function(response) {
				if (response.data['jml'] > 0) {
					swal({
						title: "Opps!",
						text: `username sudah digunakan silahkan ganti username anda!`,
						icon: "error",
						button: "Tutup!",
					});
					$(`#username`).val('');
				} else {
					$(`#msgUsernameValid`).removeClass('hide');
				}
			},
			'error': function(err) {
				console.log(JSON.stringify(err));
			},
		});
	}

	function hideMsg(idMsg) {
		$(`#${idMsg}`).addClass('hide');
	}
</script>