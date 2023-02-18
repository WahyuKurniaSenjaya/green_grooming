<script>
	function modal_verifikasi(id_booking) {
		$("#modal_verifikasi").modal('show');
		$("#id_bookingEdit").val(id_booking);
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
					form = $('#formVerifikasi');
					$.ajax({
						'url': `<?= base_url() ?>booking/update_status`,
						'type': 'POST',
						'dataType': 'json',
						'data': form.serialize(),
						'beforeSend': function(response) {
							$("#modal_verifikasi").modal("hide");
						},
						'success': function(response) {
							form[0].reset();
							dt_history();
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