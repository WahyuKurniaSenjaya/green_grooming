<script>
	function modal_upload_nota(id_booking) {
		$("#modal_upload_nota").modal('show');
		$("#id_booking").val(id_booking);
	}

	function upload_nota() {
		swal({
				title: "Upload Nota ?",
				text: "Apakah anda yakin!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willSave) => {
				if (willSave) {
					let foto = document.getElementById("foto").files.length;
					if (foto == 0) {
						$("#msgFoto").removeClass("hide");
						validationGagal('Foto')
					} else {
						form = $('#formBuktiNota')[0];
						data = new FormData(form);
						$.ajax({
							'url': `<?= base_url() ?>booking/upload_nota`,
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
								dt_history()
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