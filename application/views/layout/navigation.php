<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
	<div class="">
		<div class="main-menu-header">
			<img class="img-40 img-radius" src="<?= base_url(); ?>assets/admin/images/avatar-4.jpg" alt="User-Profile-Image">
			<div class="user-details">
				<span><?= $this->session->userdata("ses_name"); ?></span>
				<span id="more-details"><?= $this->session->userdata("type") == "1" ? "Administrator" : "User"; ?><i class="ti-angle-down"></i></span>
			</div>
		</div>

		<div class="main-menu-content">
			<ul>
				<li class="more-details">
					<a href="<?= base_url(); ?>profile"><i class="ti-user"></i>View Profile</a>
					<a href="<?= base_url(); ?>login/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="pcoded-search">
		<span class="searchbar-toggle"> </span>
		<div class="pcoded-search-box ">
			<input type="text" placeholder="Search" class="text-dark">
			<span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
		</div>
	</div>
	<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
	<ul class="pcoded-item pcoded-left-item">
		<li class="">
			<a href="<?= base_url(); ?>dashboard">
				<span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li class="">
			<a href="<?= base_url(); ?>booking">
				<span class="pcoded-micon"><i class="ti-layers"></i><b>B</b></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.main">Booking</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li>
			<a href="<?= base_url(); ?>booking/history">
				<span class="pcoded-micon"><i class="ti-layers"></i><b>T</b></span>
				<span class="pcoded-mtext" data-i18n="nav.form-components.main">History Booking</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li>
			<a href="<?= base_url(); ?>rating">
				<span class="pcoded-micon"><i class="ti-layers"></i><b>T</b></span>
				<span class="pcoded-mtext" data-i18n="nav.form-components.main">Rating</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
	</ul>
	<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Setting</div>
	<ul class="pcoded-item pcoded-left-item">
		<?php if ($this->session->userdata("ses_type") == 1) { ?>
			<li>
				<a href="<?= base_url(); ?>pelanggan">
					<span class="pcoded-micon"><i class="ti-layers"></i><b>P</b></span>
					<span class="pcoded-mtext" data-i18n="nav.form-components.main">Pelanggan</span>
					<span class="pcoded-mcaret"></span>
				</a>
			</li>
			<li>
				<a href="<?= base_url(); ?>jasa">
					<span class="pcoded-micon"><i class="ti-layers"></i><b>J</b></span>
					<span class="pcoded-mtext" data-i18n="nav.form-components.main">Jasa</span>
					<span class="pcoded-mcaret"></span>
				</a>
			</li>
			<li>
				<a href="<?= base_url(); ?>artikel">
					<span class="pcoded-micon"><i class="ti-layers"></i><b>A</b></span>
					<span class="pcoded-mtext" data-i18n="nav.form-components.main">Artikel</span>
					<span class="pcoded-mcaret"></span>
				</a>
			</li>
		<?php } ?>
		<li>
			<a href="<?= base_url(); ?>profile">
				<span class="pcoded-micon"><i class="ti-layers"></i><b>PE</b></span>
				<span class="pcoded-mtext" data-i18n="nav.form-components.main">Profile</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
	</ul>
</div>