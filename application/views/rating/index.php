<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<?php foreach ($rating as $r) { ?>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-3 text-center">
											<?php if ($r->id_rating % 2 == 0) { ?>
												<img class="img-circle" src="<?= base_url(); ?>assets/images/rating_image.jpg" style="width: 120px;" alt="Client Testimonoal">
											<?php } else { ?>
												<img class="img-circle" src="<?= base_url(); ?>assets/images/rating_image_guy.jpg" style="width: 120px;" alt="Client Testimonoal">
											<?php } ?>
										</div>
										<div class="col-sm-9">
											<h6 style="text-align: justify;"><b><?= $r->nama_pelanggan; ?></b></h6>
											<p style="text-align: justify;"><?= $r->ulasan; ?></p>
											<?php if ($r->rating == 1) { ?>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
											<?php } else if ($r->rating == 2) { ?>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
											<?php } else if ($r->rating == 3) { ?>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
											<?php } else if ($r->rating == 4) { ?>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
											<?php } else if ($r->rating == 5) { ?>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
												<a href="#!"><i class="icofont icofont-star f-18 text-c-yellow"></i></a>
											<?php	} ?>
											<p class="review-date" style="margin-top: 10px;"><?= $r->tgl_booking; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>