<script>
	function modal_edit(id, judul, deskripsi, foto) {
		$("#modal_edit").modal('show');
		$("#idEdit").val(id);
		$("#judulEdit").val(judul);
		$("#deskripsiEdit").val(deskripsi);
		oldFoto = `<a data-fancybox="gallery" href="<?= base_url('assets/uploads/artikel/'); ?>${foto}" class="gallery"> <img src="<?= base_url('assets/uploads/artikel/'); ?>${foto}" alt="" srcset="" width="30px" height="30px"></a>`;
		$("#oldFotoEdit").append(oldFoto);
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
					let judul = document.getElementById('judulEdit').value;
					let deskripsi = document.getElementById('deskripsiEdit').value;
					// let foto = document.getElementById('foto').files.length;
					if (judul == '' || judul == null) {
						$("#msgJudulEdit").removeClass("hide");
						validationGagal('Judul Artikel')
					} else if (deskripsi == '' || deskripsi == null) {
						$("#msgDeskripsiEdit").removeClass("hide");
						validationGagal('Deskripsi')
						// } else if (foto == 0) {
						// 	$("#msgFoto").removeClass("hide");
						// 	validationGagal('Foto')
					} else {
						form = $('#formEdit')[0];
						data = new FormData(form);
						$.ajax({
							'url': `${base_url}artikel/update`,
							'type': 'POST',
							'enctype': 'multipart/form-data',
							'processData': false,
							'contentType': false,
							'cache': false,
							'dataType': 'json',
							'data': data,
							'beforeSend': function(response) {
								$("#modal_edit").modal("hide");
							},
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