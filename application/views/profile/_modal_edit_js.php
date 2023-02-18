<script>
	function modal_edit(id, username, password, nama, phone, alamat) {
		$("#modal_edit").modal('show');
		$("#idEdit").val(id);
		$("#usernameEdit").val(username);
		$("#passwordEdit").val(password);
		$("#namaEdit").val(nama);
		$("#phoneEdit").val(phone);
		$("#alamatEdit").val(alamat);
	}

	function update() {
		swal({
				title: "Update Data ?",
				text: "Apakah anda yakin!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willSave) => {
				if (willSave) {
					let username = document.getElementById('usernameEdit').value;
					let password = document.getElementById('passwordEdit').value;
					let nama = document.getElementById('namaEdit').value;
					let phone = document.getElementById('phoneEdit').value;
					let alamat = document.getElementById('alamatEdit').value;
					if (username == '' || username == null) {
						$("#msgUsername").removeClass("hide");
					} else if (password == '' || password == null) {
						$("#msgPassword").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (nama == '' || nama == null) {
						$("#msgNama").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (phone == '' || phone == null) {
						$("#msgDeskripsiEdit").removeClass("hide");
						validationGagal('Deskripsi')
					} else if (alamat == '' || alamat == null) {
						$("#msgHargaEdit").removeClass("hide");
						validationGagal('Harga')
					} else {
						form = $('#formEdit');
						$.ajax({
							'url': `${base_url}pelanggan/update`,
							'type': 'POST',
							'dataType': 'json',
							'data': form.serialize(),
							'beforeSend': function(response) {
								$("#modal_edit").modal("hide");
							},
							'success': function(response) {
								location.reload();
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

	function hideMsg(idMsg) {
		$(`#${idMsg}`).addClass('hide');
	}
</script>