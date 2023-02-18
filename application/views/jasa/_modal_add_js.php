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
					let nama = document.getElementById('nama').value;
					let deskripsi = document.getElementById('deskripsi').value;
					let harga = document.getElementById('harga').value;
					if (nama == '' || nama == null) {
						$("#msgNama").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (deskripsi == '' || deskripsi == null) {
						$("#msgDeskripsi").removeClass("hide");
						validationGagal('Deskripsi')
					} else if (harga == '' || harga == null) {
						$("#msgHarga").removeClass("hide");
						validationGagal('Harga')
					} else {
						form = $('#formAdd');
						$.ajax({
							'url': `${base_url}/jasa/simpan`,
							'type': 'POST',
							'dataType': 'json',
							'data': form.serialize(),
							'success': function(response) {
								form[0].reset();
								dt_jasa();
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