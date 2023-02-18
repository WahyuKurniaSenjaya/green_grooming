<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">

			<div class="page-header card">
				<div class="row align-items-end">
					<div class="col-lg-12">
						<div class="page-header-title">
							<i class="icofont icofont-clip-board bg-c-yellow"></i>
							<div class="d-inline">
								<h4 style="margin-top: 10px;">Booking - Berhasil</h4>
								<h4 style="margin-top: 10px;"><?= $booking->status == 2 ? '<span class="label label-warning text-white">Menunggu Verifikasi Pembayaran</span>' : ''; ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<h4 class="text-left">Detail Pesanan :</h4>
								<hr>
								<table class="table table-sm table-striped" style="margin-top: 20px;">
									<tbody>
										<tr>
											<td style="width: 20%;">Kode Booking</td>
											<td style="width: 5%;">:</td>
											<td style="width: 25%;"><?= $booking->id_booking; ?></td>
											<td style="width: 20%;">Nama Pelanggan</td>
											<td style="width: 5%;">:</td>
											<td style="width: 25%;"><?= $booking->nama_pelanggan; ?></td>
										</tr>
										<tr>
											<td style="width: 20%;">Jenis Layanan</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->nama_jasa; ?></td>
											<td style="width: 20%;">Phone</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->phone; ?></td>
										</tr>
										<tr>
											<td style="width: 20%;">Tgl Booking</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->tgl_booking; ?></td>
											<td style="width: 20%;">Alamat</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->alamat; ?></td>
										</tr>
										<tr>
											<td style="width: 20%;">Waktu Booking</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->jam_booking; ?></td>
											<td style="width: 20%;">Catatan</td>
											<td style="width: 5%;">:</td>
											<td><?= $booking->catatan; ?></td>
										</tr>
									</tbody>
								</table>
								<h4 class="text-right" style="margin-right: 20px;">Total : Rp. <?= number_format($booking->total, 0, ",", "."); ?></h4>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>