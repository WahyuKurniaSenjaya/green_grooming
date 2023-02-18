<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">

			<div class="page-header card">
				<div class="row align-items-end">
					<div class="col-lg-12">
						<div class="page-header-title">
							<i class="icofont icofont-clip-board bg-c-yellow"></i>
							<div class="d-inline">
								<h4>Form Booking</h4>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<form action="<?= base_url(); ?>booking/simpan" method="post" class="j-pro" id="" novalidate="" style="background-color: white;-webkit-box-shadow:none;box-shadow: none;">
								<div class="j-content">
									<div class="j-unit">
										<label class="j-label">Your name</label>
										<div class="j-input">
											<label class="j-icon-right" for="nama">
												<i class="icofont icofont-ui-user"></i>
											</label>
											<input type="hidden" id="id_pelanggan" name="id_pelanggan" value="<?= $profile->id; ?>" readonly style="background-color: #EBEFF4;">
											<input type="text" id="nama" name="nama" value="<?= $profile->nama; ?>" readonly style="background-color: #EBEFF4;">
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Phone/Mobile</label>
										<div class="j-input j-success-view">
											<label class="j-icon-right" for="phone">
												<i class="icofont icofont-phone"></i>
											</label>
											<input type="text" id="phone_number" name="phone" value="<?= $profile->phone; ?>" style="background-color: #EBEFF4 !important;" readonly>
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Alamat</label>
										<div class="j-input">
											<label class="j-icon-right" for="email">
												<i class="icofont icofont-address-book"></i>
											</label>
											<textarea name="alamat" id="alamat" cols="30" rows="10" readonly style="background-color: #EBEFF4;"><?= $profile->alamat; ?></textarea>
										</div>
									</div>
									<div class="j-divider j-gap-bottom-25"></div>
									<div class="j-unit">
										<label class="j-label">Tipe Booking</label>
										<div class="j-input">
											<label class="j-icon-right" for="tipe_layanan">
												<i class="icofont icofont-doctor-alt"></i>
											</label>
											<select name="tipe_layanan" id="tipe_layanan">
												<option value="">Pilih Tipe</option>
												<option value="Layanan Ke Rumah">Layanan Ke Rumah</option>
												<option value="Datang Ke Outlet">Datang Ke Outlet</option>
											</select>
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Jasa Grooming</label>
										<div class="j-input">
											<label class="j-icon-right" for="jenis_layanan">
												<i class="icofont icofont-doctor-alt"></i>
											</label>
											<select name="jenis_layanan" id="jenis_layanan" onchange="showDeskripsi()">
												<option value="">Pilih Layanan</option>
												<?php foreach ($jasa as $j) { ?>
													<option value="<?= $j->id; ?>" data-keterangan="<?= $j->deskripsi; ?>" data-harga="<?= $j->harga; ?>"><?= $j->nama; ?> | Rp. <?= number_format($j->harga, 0, ",", ".");; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Deskripsi Jasa</label>
										<div class="j-input">
											<label class="j-icon-right" for="deskripsi">
												<i class="icofont icofont-list"></i>
											</label>
											<input type="hidden" name="harga" id="harga" readonly>
											<textarea name="deskripsi" id="deskripsi" cols="30" rows="10" readonly style="background-color: #EBEFF4;"></textarea>
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Booking Date</label>
										<div class="j-input j-success-view">
											<label class="j-icon-right" for="tgl_booking">
												<i class="icofont icofont-ui-calendar"></i>
											</label>
											<input type="text" id="tgl_booking" name="tgl_booking" readonly="" class="">
										</div>
									</div>
									<div class="j-unit">
										<label class="j-label">Booking hour</label>
										<div class="j-input j-success-view input-group date" id="booking_hour">
											<input type="text" id="jam_booking" name="jam_booking" class="form-control">
											<span class="input-group-addon ">
												<span class="icofont icofont-clock-time"></span>
											</span>
										</div>
									</div>
									<div class="j-divider j-gap-bottom-25"></div>

									<div class="j-unit">
										<label class="j-label">Catatan/Pesan</label>
										<div class="j-input">
											<textarea spellcheck="false" name="catatan"></textarea>
										</div>
									</div>
									<div class="j-response"></div>
								</div>
								<div class="j-footer" style="background-color: white;border-top: none;">
									<button type="submit" class="btn btn-primary">Booking</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>