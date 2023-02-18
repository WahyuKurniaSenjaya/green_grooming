<script>
	function modal_rating(id_booking) {
		$("#modal_rating").modal('show');
		$("#id_booking_rating").val(id_booking);
	}

	function submit_rating() {
		swal({
				title: "Berikan Rating ?",
				text: "Apakah anda yakin!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willSave) => {
				if (willSave) {
					form = $('#formRating');
					$.ajax({
						'url': `<?= base_url() ?>booking/submit_rating`,
						'type': 'POST',
						'dataType': 'json',
						'data': form.serialize(),
						'beforeSend': function(response) {
							$("#modal_rating").modal("hide");
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
</script>