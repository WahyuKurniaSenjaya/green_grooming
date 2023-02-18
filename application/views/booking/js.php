<script type="text/javascript" src="<?= base_url(); ?>assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/pages/j-pro/js/jquery.j-pro.js"></script> -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/pages/j-pro/js/custom/booking.js"></script> -->
<script>
	var base_url = "<?= base_url() ?>";

	$(document).ready(function() {
		bookingDate();
		$('#booking_hour').datetimepicker({
			format: 'HH:mm',
			icons: {
				time: "icofont icofont-clock-time",
				date: "icofont icofont-ui-calendar",
				up: "icofont icofont-rounded-up",
				down: "icofont icofont-rounded-down",
				next: "icofont icofont-rounded-right",
				previous: "icofont icofont-rounded-left"
			}
		});
	});

	function showDeskripsi() {
		deskripsi = $('#jenis_layanan').find(':selected').data('keterangan');
		harga = $('#jenis_layanan').find(':selected').data('harga');
		$("#harga").val(harga);
		$("#deskripsi").val(deskripsi);
	}

	function bookingDate() {
		$("#tgl_booking").datepicker({
			dateFormat: "yy-mm-dd",
			prevText: '<i class="icofont icofont-caret-left"></i>',
			nextText: '<i class="icofont icofont-caret-right"></i>'
		});
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
							'url': `${base_url}booking/upload_nota`,
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
								window.location.href = `<?= base_url() ?>booking/detail/<?php if (isset($booking)) {
																							echo	$booking->id_booking;
																						} ?>`;
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
</script>