<script>
	$(document).ready(function() {
		dt_history()
	});

	function dt_history() {
		$('#dt_history').DataTable({
			"lengthChange": false,
			"searching": true,
			"info": true,
			"paging": true,
			"autoWidth": false,
			"destroy": true,
			"order": [1, "desc"],
			"dom": 'Bfrtip',
			buttons: [{
				extend: 'excelHtml5',
				text: 'Export to Excel',
				footer: true
			}],
			"ajax": {
				"dataType": 'json',
				"type": "POST",
				"url": `<?= base_url() ?>/booking/dt_history`,
			},
			"columns": [{
					"data": "status",
					"render": function(data, type, row) {
						if (data == '1') {
							return `<span class='badge bg-secondary'>Menunggu Pembayaran</span>`
						} else if (data == '2') {
							return `<span class='badge bg-warning'>Menunggu Verifikasi</span>`
						} else if (data == '3') {
							return `<span class='badge bg-primary'>Booking Berhasil</span>`
						} else {
							return `<span class='badge bg-danger'>Booking di Reject</span>`
						}
					},
					"className": "text-center",
				},
				{
					"data": "tgl_booking",
				},
				{
					"data": "jam_booking",
				},
				{
					"data": "id_booking",
				},
				{
					"data": "nama_pelanggan",
				},
				{
					"data": "phone",
				},
				{
					"data": "nama_jasa",
				},
				{
					"data": "tipe_booking",
				},
				{
					"data": "total",
					"render": function(data, type, row) {
						return `<span>${formatNumber(data)}</span>`
					},
				},
				{
					"data": "catatan",
				},
				{
					"data": "nota",
					"render": function(data, type, row) {
						if (data == null) {
							return `<button type="button" class="btn btn-warning btn-outline-warning btn-mini" onclick="modal_upload_nota('${row['id_booking']}')"><i class="ti-upload" style="margin:0;"></i></button>`
						} else {
							return `<a data-fancybox="gallery" href="<?= base_url('assets/uploads/nota/'); ?>${data}" class="gallery"> <img src="<?= base_url('assets/uploads/nota/'); ?>${data}" alt="" srcset="" width="30px" height="30px"></a>`
						}

					},
				},
				{
					"data": "id",
					"render": function(data, type, row) {
						<?php if ($this->session->userdata('ses_type') == 1) { ?>
							if (row['nota'] != null) {
								verifikasi = `<button type="button" class="btn btn-warning btn-outline-warning btn-mini" onclick="modal_verifikasi('${row['id_booking']}')"><i class="ti-pencil" style="margin:0;"></i></button>`;
							} else {
								verifikasi = '';
							}
							return `${verifikasi} <button type="button" class="btn btn-danger btn-outline-danger btn-mini" onclick="hapus('${row['id_booking']}')"><i class="ti-trash" style="margin:0;"></i></button>`
						<?php } else { ?>
							if (row['status'] == 3) {
								return `<button type="button" class="btn btn-warning btn-outline-warning btn-mini" onclick="modal_rating('${row['id_booking']}')"><i class="ti-star" style="margin:0;"></i> Rating</button>`
							} else {
								return ''
							}
						<?php } ?>
					},
				},
			]
		});
	}


	function hapus(id_booking) {
		swal({
				title: "Hapus Data ?",
				text: "Apakah anda yakin!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willSave) => {
				if (willSave) {
					$.ajax({
						'url': `<?= base_url() ?>booking/hapus`,
						'type': 'POST',
						'dataType': 'json',
						'data': {
							id_booking: id_booking
						},
						'success': function(response) {
							dt_history();
						},
						'error': function(err) {
							console.log(JSON.stringify(err));
						},
						'complete': function(response) {
							swal("Proses hapus berhasil!", {
								icon: "success",
							});
						}
					});
				} else {
					swal("Proses hapus dibatalkan!", {
						icon: "warning",
					});
				}
			});
	}
</script>

<?php $this->load->view('booking/_modal_upload_nota_js.php'); ?>
<?php $this->load->view('booking/_modal_verifikasi_js.php'); ?>
<?php $this->load->view('booking/_modal_rating_js.php'); ?>