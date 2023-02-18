<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Page</title>


	<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="#">
	<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="#">

	<link rel="icon" href="<?= base_url() ?>assets/loginpage/images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/loginpage/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/loginpage/icon/themify-icons.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/loginpage/icon/icofont.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/loginpage/css/style.css">

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

<body class="fix-menu">

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

	<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="login-card card-block auth-body mr-auto ml-auto">
						<form class="md-float-material" action="<?= base_url(); ?>login" method="POST">
							<div class="text-center">
								<!-- <img src="<?= base_url() ?>assets/loginpage/images/auth/logo-dark.png" alt="logo.png"> -->
							</div>
							<div class="auth-box">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-left txt-primary">Sign In</h3>
									</div>
								</div>
								<hr />
								<div class="input-group">
									<input type="text" class="form-control" name="username" placeholder="Your Username">
									<span class="md-line"></span>
								</div>
								<div class="input-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
									<span class="md-line"></span>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
									</div>
									<div class="col-md-12">
										<a type="button" onclick="modal_add()" class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20">Register</a>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-md-10">
										<p class="text-inverse text-left m-b-0">Thank you and enjoy our Grooming Service.</p>
										<p class="text-inverse text-left"><b>Green Grooming Team</b></p>
									</div>
									<div class="col-md-2">
										<i aria-hidden="true" class="fas fa-dog text-success" height="60" width="60" alt="Service" style="font-size: 20pt;margin:auto;"></i>
										<!-- <img src="<?= base_url() ?>assets/loginpage/images/auth/Logo-small-bottom.png" alt="small-logo.png"> -->
									</div>
								</div>
							</div>
						</form>

					</div>

				</div>

			</div>

		</div>

	</section>


	<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url() ?>assets/loginpage/files/assets/loginpage/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url() ?>assets/loginpage/files/assets/loginpage/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url() ?>assets/loginpage/files/assets/loginpage/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url() ?>assets/loginpage/files/assets/loginpage/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url() ?>assets/loginpage/files/assets/loginpage/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/jquery.slimscroll.js"></script>

	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/modernizr.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/css-scrollbars.js"></script>

	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/i18next.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/i18nextXHRBackend.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/i18nextBrowserLanguageDetector.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/jquery-i18next.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/loginpage/js/common-pages.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<script>
		// (function() {
		// 	var js = "window['__CF$cv$params']={r:'798effe14a8746e5',m:'_Xmk8YGXFZDPhRBXIom861rXXghG9VFyiZ37.Jm7DRo-1676306360-0-AQFLjv+qJiS6Klo6ddLIPRHfLBvSrJk9bwWE+VKIxyKY5YzdneuYhtHMm5sP5BxjTJrC1QzGcHWPRu5u6MKz0zYNYhVe3CVsigeZ1enZGGsnjeybE35BGslBT2AavCp9gGfskqfxQmRXP8S6R+ZF0Ywpdiq/gfPUvowEpsEKgwMovMAng5YjivPsdr07IEmpcTSDPcNzbXJmhSHFhVr+iFE=',s:[0x01382df9d5,0x784378ae89],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
		// 	var _0xh = document.createElement('iframe');
		// 	_0xh.height = 1;
		// 	_0xh.width = 1;
		// 	_0xh.style.position = 'absolute';
		// 	_0xh.style.top = 0;
		// 	_0xh.style.left = 0;
		// 	_0xh.style.border = 'none';
		// 	_0xh.style.visibility = 'hidden';
		// 	document.body.appendChild(_0xh);

		// 	function handler() {
		// 		var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
		// 		if (_0xi) {
		// 			var _0xj = _0xi.createElement('script');
		// 			_0xj.nonce = '';
		// 			_0xj.innerHTML = js;
		// 			_0xi.getElementsByTagName('head')[0].appendChild(_0xj);
		// 		}
		// 	}
		// 	if (document.readyState !== 'loading') {
		// 		handler();
		// 	} else if (window.addEventListener) {
		// 		document.addEventListener('DOMContentLoaded', handler);
		// 	} else {
		// 		var prev = document.onreadystatechange || function() {};
		// 		document.onreadystatechange = function(e) {
		// 			prev(e);
		// 			if (document.readyState !== 'loading') {
		// 				document.onreadystatechange = prev;
		// 				handler();
		// 			}
		// 		};
		// 	}
		// })();
	</script>
	<?php $this->load->view('auth/_modal_add'); ?>
	<?php $this->load->view('auth/_modal_add_js'); ?>
</body>

</html>