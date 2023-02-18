<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="cover-profile">
							<div class="profile-bg-img">
								<img class="profile-bg-img img-fluid" src="<?= base_url(); ?>assets/images/user-profile/bg-img1.jpg" alt="bg-img">
								<div class="card-block user-info">
									<div class="col-md-12">
										<div class="media-left">
											<a href="#" class="profile-image">
												<div class="user-img img-radius" style="background-color: white;padding: 10px;">
													<i class="ti-user text-primary" style="font-size: 60pt;"></i>
												</div>
												<!-- <img class="user-img img-radius" src="<?= base_url(); ?>assets/images/user-profile/user-img.jpg" alt="user-img"> -->
											</a>
										</div>
										<div class="media-body row">
											<div class="col-lg-12">
												<div class="user-title">
													<h2><?= $this->session->userdata('ses_name'); ?></h2>
													<span class="text-white"><?= $this->session->userdata('ses_type') == 1 ? 'Admin' : 'Pelanggan'; ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">

						<div class="tab-header card">
							<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
									<div class="slide"></div>
								</li>
							</ul>
						</div>


						<div class="tab-content">

							<div class="tab-pane active" id="personal" role="tabpanel">

								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">About Me</h5>
										<button id="edit-btn" type="button" onclick="modal_edit('<?= $profile->id; ?>','<?= $profile->username; ?>','<?= $profile->password; ?>','<?= $profile->nama; ?>','<?= $profile->phone; ?>','<?= $profile->alamat; ?>')" class="btn btn-sm btn-primary waves-effect waves-light f-right">
											<i class="icofont icofont-edit"></i>
										</button>
									</div>
									<div class="card-block">
										<div class="view-info">
											<div class="row">
												<div class="col-lg-12">
													<div class="general-info">
														<div class="row">
															<div class="col-lg-12 col-xl-6">
																<div class="table-responsive">
																	<table class="table m-0">
																		<tbody>
																			<tr>
																				<th scope="row">Full Name</th>
																				<td><?= $profile->nama; ?></td>
																			</tr>
																			<tr>
																				<th scope="row">Phone</th>
																				<td><?= $profile->phone; ?></td>
																			</tr>
																			<tr>
																				<th scope="row">Alamat</th>
																				<td><?= $profile->alamat; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>

															<div class="col-lg-12 col-xl-6">
																<div class="table-responsive">
																	<table class="table">
																		<tbody>
																			<tr>
																				<th scope="row">Username</th>
																				<td><?= $profile->username; ?></td>
																			</tr>
																			<tr>
																				<th scope="row">Password</th>
																				<td>*************</td>
																			</tr>
																		</tbody>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('profile/_modal_edit'); ?>