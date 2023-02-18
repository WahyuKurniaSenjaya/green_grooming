<script>
	function modal_edit(id, nama, deskripsi, harga) {
		$("#modal_edit").modal('show');
		$("#idEdit").val(id);
		$("#namaEdit").val(nama);
		$("#deskripsiEdit").val(deskripsi);
		$("#hargaEdit").val(harga);
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
					let nama = document.getElementById('namaEdit').value;
					let deskripsi = document.getElementById('deskripsiEdit').value;
					let harga = document.getElementById('hargaEdit').value;
					if (nama == '' || nama == null) {
						$("#msgNamaEdit").removeClass("hide");
						validationGagal('Nama Layanan Jasa')
					} else if (deskripsi == '' || deskripsi == null) {
						$("#msgDeskripsiEdit").removeClass("hide");
						validationGagal('Deskripsi')
					} else if (harga == '' || harga == null) {
						$("#msgHargaEdit").removeClass("hide");
						validationGagal('Harga')
					} else {
						form = $('#formEdit');
						$.ajax({
							'url': `${base_url}/jasa/update`,
							'type': 'POST',
							'dataType': 'json',
							'data': form.serialize(),
							'beforeSend': function(response) {
								$("#modal_edit").modal("hide");
							},
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