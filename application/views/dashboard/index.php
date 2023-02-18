<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body text-center">
								<h4>Welcome</h4>
							</div>
						</div>
					</div>
					<?php foreach ($artikel as $a) { ?>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5><?= $a->judul; ?></h5>
								</div>
								<div class="card-block">
									<div class="row">
										<div class="col-sm-3 text-center">
											<img src="<?= base_url('assets/uploads/artikel/'); ?><?= $a->foto; ?>" alt="" srcset="" width="200px" height="200px">
										</div>
										<div class="col-sm-9">
											<p style="text-align: justify;">
												<?= $a->deskripsi; ?>
											</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					<?php	} ?>
				</div>
			</div>
		</div>
	</div>
</div>