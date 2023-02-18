<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body" style="display: flex;justify-content: space-between;">
								<h4>Pelanggan</h4>
								<button type="button" class="btn btn-primary" onclick="modal_add()">Add Data</button>
							</div>
							<div class="card-body">
								<div class="dt-responsive table-responsive">
									<table id="dt_pelanggan" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th style="text-align: center;">USERNAME</th>
												<th style="text-align: center;">NAMA</th>
												<th style="text-align: center;">PHONE</th>
												<th style="text-align: center;">ALAMAT</th>
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
<?php $this->load->view('pelanggan/_modal_add'); ?>
<?php $this->load->view('pelanggan/_modal_edit'); ?>