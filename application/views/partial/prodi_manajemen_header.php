<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Universitas Siber Asia" />

	<!-- OG -->
	<meta property="og:title" content="Universitas Siber Asia" />
	<meta property="og:description" content="Universitas Siber Asia" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/prodi/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title><?= $prodi; ?> - <?= $title; ?></title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/assets.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/prodi/css/color/color-1.css">

	<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="<?= base_url(); ?>" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="<?= base_url(); ?>assets/images/logo-mobile.png"
							width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="<?= base_url(); ?>assets/images/logo-white.png"
							width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="" class="ttr-material-button ttr-submenu-toggle">Program Studi - <?= $prodi; ?></a>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
		</div>
	</header>
	<!-- header end -->