<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Landing Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Landing page template for creative dashboard">
	<meta name="keywords" content="Landing page template">

	<link rel="icon" href="<?= base_url(); ?>assets/landingpage/logos/favicon.ico" type="image/png" sizes="16x16">

	<link href="<?= base_url(); ?>assets/landingpage/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/owl.theme.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/animsition.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landingpage/css/ionicons.min.css">

	<link href="<?= base_url(); ?>assets/landingpage/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/sweetalert/sweetalert.min.js"></script>

	<style>
		.modal {
			z-index: 1050 !important;
		}

		.show {
			display: block;
		}

		.hide {
			display: none;
		}
	</style>


</head>

<body>
	<div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">

					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll" href="#main"><img src="<?= base_url(); ?>assets/landingpage/logos/green_grooming_resize.png" alt="Guru Able Logo" /></a>
					</div>

					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a class="page-scroll" href="#main">Home</a></li>
							<li><a class="page-scroll" href="#services">Penting</a></li>
							<li><a class="page-scroll" href="#features">Layanan</a></li>
							<li><a class="page-scroll" href="#reviews">Testimoni</a></li>
							<li><a class="page-scroll" href="#pricing">Pricing</a></li>
							<li><a href="<?= base_url(); ?>auth/login">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="main" id="main">
			<div class="hero-section" style="background-image: url('<?= base_url() ?>assets/landingpage/images/grooming.jpg');">
				<div class="hero-section" style="background: rgba(200, 214, 237, 0.6);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);border: 1px solid rgba(255, 255, 255, 0.3);">
					<div class="container">
						<div class="hero-content app-hero-content text-center">
							<div class="col-md-10 col-md-offset-1 nopadding">
								<h1 class="wow fadeInUp" data-wow-delay="0s"><span style="color: #93BE52;background-color: white;padding: 2px;">&nbsp;Grooming </span><span style="color: white;background-color: #93BE52;padding: 2px;">&nbsp;Services&nbsp;</span></h1>
								<p class="wow fadeInUp" data-wow-delay="0.2s">
									Green Grooming menyediakan Jasa Grooming Anjing & Kucing Panggilan.
									<br class="hidden-xs"> Kami berikan perawatan terbaik di tempat Kamu, Kamu & Anabul-mu bisa #diRumahAja!
								</p>
								<a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="<?= base_url(); ?>auth/login">Layanan Ke Rumah</a>
								<a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="<?= base_url(); ?>auth/login">Booking Now</a>
							</div>
							<div class="col-md-12">
								<div class="hero-image">
									<img class="img-responsive" src="<?= base_url(); ?>assets/landingpage/images/app_hero_1.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="services-section text-center" id="services">
				<div class="container">
					<div class="col-md-8 col-md-offset-2 nopadding">
						<div class="services-content">
							<h1 class="wow fadeInUp" data-wow-delay="0s"><b>Kenapa </b>Harus <b><u>Grooming</u> di</b> Green Grooming?</h1>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<div class="services">
							<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="services-icon" style="display: flex;justify-content: center;">
									<i aria-hidden="true" class="fas fa-dog text-primary" height="60" width="60" alt="Service" style="font-size: 35pt;margin:auto;"></i>
								</div>
								<div class="services-description">
									<h1>PENYAYANG BINATANG</h1>
									<p>
										Grooming Kucing di Green Groming (ataupun di rumah Kamu), Groomer Kami selalu berusaha memperlakukan anabul Kamu dengan hati-hati dan penuh kesayangan.
									</p>
								</div>
							</div>
							<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="services-icon" style="display: flex;justify-content: center;">
									<i aria-hidden="true" class="fas fa-award" height="60" width="60" alt="Service" style="font-size: 35pt;margin:auto;color: #E52952;"></i>
								</div>
								<div class="services-description">
									<h1>PROFESIONAL</h1>
									<p>
										Semua Groomer di Petshop Indonesia mempunyai Pengalaman & Standar Prosedur (SOP) terbaik dalam melayani Grooming anabul kesayangan Kamu.
									</p>
								</div>
							</div>
							<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
								<div class="services-icon" style="display: flex;justify-content: center;">
									<i aria-hidden="true" class="fas fa-shield-alt" height="60" width="60" alt="Service" style="font-size: 35pt;margin:auto;color: #FFB64D;"></i>
								</div>
								<div class="services-description">
									<h1>PRODUK AMAN</h1>
									<p>
										Setiap produk Grooming yang kami gunakan, mulai dari ear cleaner sampai pemberian parfum, menggunakan produk-produk Premium yang 100% aman untuk anabul Kamu.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-features" id="features">
				<div class="container nopadding">
					<div class="flex-split">
						<div class="f-left wow fadeInUp" data-wow-delay="0s">
							<div class="left-content">
								<img class="img-responsive" src="<?= base_url(); ?>assets/landingpage/images/5527355-removebg.png" alt="" />
							</div>
						</div>
						<div class="f-right wow fadeInUp" data-wow-delay="0.2s">
							<div class="right-content">
								<h2><b>Jika </b>Kamu</h2>
								<ul>
									<li><i class="fas fa-paw"></i>Tidak Paham Cara Grooming / Perawatan Yang Benar..</li>
									<li><i class="fas fa-paw"></i>Tidak Punya Waktu Untuk Grooming Sendiri..</li>
									<li><i class="fas fa-paw"></i>Tidak Berani Ambil Resiko Menggunakan Shampoo / Produk Perawatan Grooming Asal-Asalan..</li>
								</ul>
								<p>
									Tenang saja, Groomer Kami juga siap Kamu booking kapanpun, demi melayani Kamu dan anabul kesayangan di rumah Kamu.
								</p>
								<a href="<?= base_url(); ?>auth/login" class="btn btn-primary btn-action btn-fill">Pesan Layanan Ke Rumah</a>
							</div>
						</div>
					</div>
					<div class="flex-split">
						<div class="f-right">
							<div class="right-content wow fadeInUp" data-wow-delay="0.2s">
								<h2><b>FREE </b>Vitamin &amp; Kalung (Pet Coolar)
									Setiap <b><u>Grooming </u></b>di <b>Green Grooming! </b>
								</h2>
								<p></p>
								<a href="<?= base_url(); ?>auth/login" class="btn btn-primary btn-action btn-fill">Saya Mau Daftar Booking</a>
							</div>
						</div>
						<div class="f-left">
							<div class="left-content wow fadeInUp" data-wow-delay="0.3s">
								<img class="img-responsive" src="<?= base_url(); ?>assets/landingpage/images/5515846-removebg.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-section" id="reviews">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-12">
							<div class="testimonials owl-carousel owl-theme">
								<div class="testimonial-single"><img class="img-circle" src="<?= base_url(); ?>assets/landingpage/images/testimonial2.jpg" alt="Client Testimonoal" />
									<div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
										<p>Betah ngajak anabul kesini pelayanannya profesional<br class="hidden-xs"> segala kebutuhan anabul ada disini
										</p>
										<h3>Profesional</h3>
										<h3> - ichank </h3>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
									</div>
								</div>
								<div class="testimonial-single"><img class="img-circle" src="<?= base_url(); ?>assets/landingpage/images/testimonial1.jpg" alt="Client Testimonoal" />
									<div class="testimonial-text">
										<p>PUAS BANGET DEH GROOMING SAMA TS!! PROFESIONAL! MAU LEMBUR LAGI AMPE RELA JEM 8 MLM KE RUMAH SAYA
											MANA GUKGUK SAYA KAMPUNG GALAK . Sabarrr banget .. T.O.P DEH. Gak kaya lapak sebelah malah ada suruh saya buang guk2 saya katanya jelek bandel!! Sama TS PUAASS BANGET DEH! Profesional bisa hadepin anjing saya!! Salut!!
										</p>
										<h3>Quality</h3>
										<h3>- vishalmg </h3>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
										<i class="fas fa-star" style="color: #FFB64D;"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="feature_huge text-center">
				<div class="container nopadding">
					<div class="col-md-12">
						<img class="img-responsive wow fadeInUp" data-wow-delay="0.1s" src="<?= base_url(); ?>assets/landingpage/images/green.png" alt="" style="max-width:100%" />
					</div>
					<div class="feature_list">
						<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
							<img src="<?= base_url(); ?>assets/landingpage/logos/feature_icon.png" alt="Feature" />
							<h1>Trusted</h1>
							<p>
								Kami selalu meningkatkan talent and skills para pegawai kami untuk meningkatkan kualitas grooming.
							</p>
						</div>
						<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
							<img src="<?= base_url(); ?>assets/landingpage/logos/feature_icon_2.png" alt="Feature" />
							<h1>One Stop Pet Supplies</h1>
							<p>
								Kami menyediakan semua jasa dan produk kebutuhan hewan peliharaan yang Anda butuhkan.
							</p>
						</div>
						<div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
							<img src="<?= base_url(); ?>assets/landingpage/logos/feature_icon_3.png" alt="Feature" />
							<h1>Full Support</h1>
							<p>
								helps you in every way posible.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="pricing-section no-color text-center" id="pricing">
				<div class="container">
					<div class="col-md-12 col-sm-12 nopadding">
						<div class="pricing-intro">
							<h1 class="wow fadeInUp" data-wow-delay="0s">Pricing Table</h1>
						</div>
						<?php foreach ($jasa as $j) { ?>
							<div class="col-sm-4" style="margin-bottom: 15px;">
								<div class="table-left wow fadeInUp" data-wow-delay="0.4s">
									<div class="icon">
										<i aria-hidden="true" class="fas fa-dog text-primary" height="60" width="60" alt="Service" style="font-size: 35pt;margin:auto;"></i>
									</div>
									<div class="pricing-details">
										<h2>Paket 1</h2>
										<span>Rp. 100k</span>
										<p style="text-align: justify;">
											Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut deserunt blanditiis hic aspernatur amet? Consectetur mollitia fugit odio, nobis magni commodi beatae.
										</p>
										<button class="btn btn-primary btn-action btn-fill" style="margin-top: 10px;">Daftar Sekarang</button>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="client-section">
				<div class="container text-center">
					<div class="clients owl-carousel owl-theme">
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo4.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo7.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo4.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo7.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo4.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo7.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo4.png" alt="" />
						</div>
						<div class="single">
							<img src="<?= base_url(); ?>assets/landingpage/logos/logo7.png" alt="" />
						</div>
					</div>
				</div>
			</div>

			<div class="footer" style="background-color: white;">
				<div class="container">
					<div class="col-md-12 text-center">
						<img src="<?= base_url(); ?>assets/landingpage/logos/green_grooming_resize.png" alt="Guru Able Logo" />
						<div class="footer-text">
							<p>
								Copyright © 2022 Green Grooming. All Rights Reserved.
							</p>
						</div>
					</div>
				</div>
			</div>

			<a id="back-top" class="back-to-top page-scroll" href="#main">
				<i class="ion-ios-arrow-thin-up"></i>
			</a>
		</div>
	</div>
	<?= $this->session->flashdata('pesan'); ?>


	<script type="text/javascript" src="<?= base_url(); ?>assets/landingpage/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/landingpage/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/landingpage/js/plugins.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/landingpage/js/menu.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/landingpage/js/custom.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>