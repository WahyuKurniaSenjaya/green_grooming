<script>
	var base_url = "<?= base_url() ?>";

	$(document).ready(function() {
		dt_pelanggan();
	});

	function dt_pelanggan() {
		$('#dt_pelanggan').DataTable({
			"lengthChange": false,
			"searching": true,
			"info": true,
			"paging": true,
			"autoWidth": false,
			"destroy": true,
			"order": [1, "asc"],
			"dom": 'Bfrtip',
			buttons: [{
				extend: 'excelHtml5',
				text: 'Export to Excel',
				footer: true
			}],
			"ajax": {
				"dataType": 'json',
				"type": "POST",
				"url": `${base_url}/pelanggan/dt_pelanggan`,
			},
			"columns": [{
					"data": "username",
					"className": "text-center"
				},
				{
					"data": "nama",
					"className": "text-center"
				},
				{
					"data": "phone",
					"render": function(data, type, row) {
						return `<span>${data}</span>`
					},
				},
				{
					"data": "alamat",
					"render": function(data, type, row) {
						return `<span>${data}</span>`
					},
				},
				{
					"data": "id",
					"render": function(data, type, row) {
						return `<button type="button" class="btn btn-warning btn-outline-warning btn-mini" onclick="modal_edit('${row['id']}','${row['username']}','${row['password']}','${row['nama']}','${row['phone']}','${row['alamat']}')"><i class="ti-pencil" style="margin:0;"></i></button>
						<button type="button" class="btn btn-danger btn-outline-danger btn-mini" onclick="hapus('${row['id']}')"><i class="ti-trash" style="margin:0;"></i></button>`
					},
				},
			]
		});
	}

	function hapus(id) {
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
						'url': `${base_url}/pelanggan/hapus`,
						'type': 'POST',
						'dataType': 'json',
						'data': {
							id: id
						},
						'success': function(response) {
							dt_pelanggan();
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

<?php $this->load->view('pelanggan/_modal_add_js.php'); ?>
<?php $this->load->view('pelanggan/_modal_edit_js.php'); ?>