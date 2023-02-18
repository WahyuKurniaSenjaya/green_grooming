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
					let judul = document.getElementById('judul').value;
					let deskripsi = document.getElementById('deskripsi').value;
					let foto = document.getElementById("foto").files.length;
					if (judul == '' || judul == null) {
						$("#msgJudul").removeClass("hide");
						validationGagal('Judul Artikel')
					} else if (deskripsi == '' || deskripsi == null) {
						$("#msgDeskripsi").removeClass("hide");
						validationGagal('Deskripsi')
					} else if (foto == 0) {
						$("#msgFoto").removeClass("hide");
						validationGagal('Foto')
					} else {
						form = $('#formAdd')[0];
						data = new FormData(form);
						$.ajax({
							'url': `${base_url}artikel/simpan`,
							'type': 'POST',
							'enctype': 'multipart/form-data',
							'processData': false,
							'contentType': false,
							'cache': false,
							'dataType': 'json',
							'data': data,
							'success': function(response) {
								console.log(response);
								form.reset();
								document.getElementById("foto").value = "";
								$(".dropify-clear").trigger("click");
								dt_artikel();
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