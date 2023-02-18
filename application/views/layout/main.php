<!DOCTYPE html>
<html lang="en">

<head>
	<title>Green Grooming </title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="CodedThemes">
	<meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="CodedThemes">
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url(); ?>assets/admin/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/css/bootstrap/css/bootstrap.min.css">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/icon/themify-icons/themify-icons.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/icon/icofont/css/icofont.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/buttons.dataTables.min.css">

	<!-- Dropify -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

	<!-- Fancy Box -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fancybox/jquery.fancybox.min.css" />

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/pages/j-pro/css/j-pro-modern.css">



	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/datetimepicker/bootstrap-datetimepicker.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" />


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

		td {
			white-space: normal;
		}
	</style>
</head>

<body>
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">

					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">

					<div class="navbar-logo" style="background-color: white;">
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<a class="mobile-search morphsearch-search" href="#">
							<i class="ti-search"></i>
						</a>
						<a href="index.html">
							<img class="img-fluid" src="<?= base_url(); ?>assets/images/green.png" alt="Theme-Logo" style="width: 200px;" />
						</a>
						<a class="mobile-options">
							<i class="ti-more"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
							</li>

							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="user-profile header-notification">
								<a href="#!">
									<img src="<?= base_url(); ?>assets/admin/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
									<span><?= $this->session->userdata("ses_name"); ?></span>
									<i class="ti-angle-down"></i>
								</a>
								<ul class="show-notification profile-notification">
									<li>
										<a href="#">
											<i class="ti-user"></i> Profile
										</a>
									</li>
									<li>
										<a href="<?= base_url(); ?>login/logout">
											<i class="ti-layout-sidebar-left"></i> Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<?php $this->load->view('layout/navigation'); ?>
					</nav>
					<div class="pcoded-content">
						<?php if (isset($content)) {
							$this->load->view($content);
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= $this->session->flashdata('pesan'); ?>

	<!-- Warning Section Starts -->
	<!-- Older IE warning message -->
	<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url(); ?>assets/admin/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url(); ?>assets/admin/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url(); ?>assets/admin/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url(); ?>assets/admin/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url(); ?>assets/admin/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/popper.js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/bootstrap/js/bootstrap.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/modernizr/modernizr.js"></script>
	<!-- am chart -->
	<script src="<?= base_url(); ?>assets/admin/pages/widget/amchart/amcharts.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/pages/widget/amchart/serial.min.js"></script>
	<!-- Todo js -->
	<script type="text/javascript " src="<?= base_url(); ?>assets/admin/pages/todo/todo.js "></script>
	<!-- Custom js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/pages/dashboard/custom-dashboard.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/script.js"></script>
	<script type="text/javascript " src="<?= base_url(); ?>assets/admin/js/SmoothScroll.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/pcoded.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/demo-12.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/jszip.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/admin/js/dataTables.fixedColumns.min.js"></script>

	<!-- Dropify -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

	<!-- fancy box -->
	<script type="text/javascript" src="<?= base_url('assets/fancybox/jquery.fancybox.min.js') ?>"></script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/pages/advance-elements/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/datetimepicker/bootstrap-datetimepicker.min.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>

	<?php if (isset($js)) {
		$this->load->view($js);
	} ?>
	<script>
		var $window = $(window);
		var nav = $('.fixed-button');
		$window.scroll(function() {
			if ($window.scrollTop() >= 200) {
				nav.addClass('active');
			} else {
				nav.removeClass('active');
			}
		});
	</script>
	<script>
		function formatNumber(num) {
			if (num == null) {
				return 0;
			} else {
				return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
			}
		}

		$('.dropify').dropify({
			tpl: {
				wrap: '<div class="dropify-wrapper"></div>',
				loader: '<div class="dropify-loader"></div>',
				message: '<div class="dropify-message"><span class="file-icon" /> <p style="font-size:14pt;">{{ default }}</p></div>',
				preview: '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
				filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
				clearButton: '<button type="button" class="dropify-clear">{{ remove }}</button>',
				errorLine: '<p class="dropify-error">{{ error }}</p>',
				errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
			}
		});
	</script>
</body>

</html>