<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">

			<div class="page-header card">
				<div class="row align-items-end">
					<div class="col-lg-12">
						<div class="page-header-title">
							<i class="icofont icofont-clip-board bg-c-yellow"></i>
							<div class="d-inline">
								<h4 style="margin-top: 10px;">Booking - Menunggu Pembayaran</h4>
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
								<h4 class="text-left">Metode Pembayaran :</h4>
								<span>Silahkan lakukan pembayaran ke rekening dibawah ini.</span>
								<hr>
								<table class="table table-sm table-striped" style="margin-top: 20px;">
									<tbody>
										<tr>
											<td style="width: 20%;">No. Rekening</td>
											<td style="width: 5%;">:</td>
											<td style="width: 75%;">327402987444</td>
										</tr>
										<tr>
											<td style="width: 20%;">Atas Nama</td>
											<td style="width: 5%;">:</td>
											<td style="width: 75%;">Green Grooming</td>
										</tr>
										<tr>
											<td style="width: 20%;">Bank</td>
											<td style="width: 5%;">:</td>
											<td style="width: 75%;">BRI</td>
										</tr>
									</tbody>
								</table>
								<hr>
								<h4 class="text-left">Upload Bukti Pembayaran :</h4>
								<span>Silahkan upload bukti pembayaran untuk melanjutkan proses booking.</span>
								<hr>
								<form id="formBuktiNota">
									<div class="col-sm-12">
										<input type="hidden" name="id_booking" value="<?= $booking->id_booking; ?>" readonly>
										<span class="badge text-dark">*Max File Size : 2 Mb</span>
										<span class="badge text-dark">*File Allowed Extension : jpg | jpeg | png</span>
										<input type="file" class="dropify" id="foto" name="foto" data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg" onkeypress="hideMsg('msgFoto')" placeholder="Foto Artikel" required>
										<span class="hide messages" id="msgFoto">
											<p class="text-danger error">Foto tidak boleh kosong.</p>
										</span>
									</div>
									<div class="col-sm-12 text-center mt-2">
										<button type="button" class="btn btn-outline-primary btn-block" onclick="upload_nota()">Upload Butki</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>