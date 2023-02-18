<style>
	.start {

		color: green;
	}

	.stop {
		color: red;
	}


	.rate {

		border-bottom-right-radius: 12px;
		border-bottom-left-radius: 12px;

	}



	.rating {
		display: flex;
		flex-direction: row-reverse;
		justify-content: center
	}

	.rating>input {
		display: none
	}

	.rating>label {
		position: relative;
		width: 1em;
		font-size: 30px;
		font-weight: 300;
		color: #FFD600;
		cursor: pointer
	}

	.rating>label::before {
		content: "\2605";
		position: absolute;
		opacity: 0
	}

	.rating>label:hover:before,
	.rating>label:hover~label:before {
		opacity: 1 !important
	}

	.rating>input:checked~label:before {
		opacity: 1
	}

	.rating:hover>input:checked~label:before {
		opacity: 0.4
	}


	.buttons {
		top: 36px;
		position: relative;
	}


	.rating-submit {
		border-radius: 15px;
		color: #fff;
		height: 49px;
	}


	.rating-submit:hover {

		color: #fff;
	}
</style>

<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body" style="display: flex;justify-content: space-between;">
								<h4>History Booking</h4>
							</div>
							<div class="card-body">
								<div class="dt-responsive table-responsive">
									<table id="dt_history" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th style="text-align: center;">STATUS</th>
												<th style="text-align: center;">TGL BOOKING</th>
												<th style="text-align: center;">JAM BOOKING</th>
												<th style="text-align: center;">ID BOOKING</th>
												<th style="text-align: center;">PELANGGAN</th>
												<th style="text-align: center;">PHONE</th>
												<th style="text-align: center;">JASA</th>
												<th style="text-align: center;">TIPE BOOKING</th>
												<th style="text-align: center;">TOTAL</th>
												<th style="text-align: center;">CATATAN</th>
												<th style="text-align: center;">NOTA</th>
												<th style="text-align: center;">ACTION</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Add -->
<?php $this->load->view('booking/_modal_upload_nota'); ?>
<?php $this->load->view('booking/_modal_verifikasi'); ?>
<?php $this->load->view('booking/_modal_rating'); ?>