<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Web Pendaftaran Magang" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Roboto:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/frontend/style.css" type="text/css" />
	<link rel="stylesheet" href="/frontend/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="/frontend/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/frontend/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/frontend/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Conference Demo Specific Stylesheet -->
	<link rel="stylesheet" href="/frontend/demos/conference/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="/frontend/css/colors.php?color=222" type="text/css" />
	<link rel="stylesheet" href="/frontend/demos/conference/conference.css" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Web Pendaftaran Magang</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="responsive-sticky-header transparent-header dark header-size-sm" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="mr-lg-0">
							<a href="#" data-scrollto="#slider" class="standard-logo" data-dark-logo="/assets/img/kominfo10.png"><img src="/assets/img/kominfo10.jpg" alt="Canvas Logo"></a>
							<a href="#" data-scrollto="#slider" class="retina-logo" data-dark-logo="/assets/img/kominfo1.jpg"><img src="/assets/img/kominfo1.jpg" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Hero/Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('/frontend/demos/conference/images/kominfo.jpeg') no-repeat center center / cover;">
			<div class="slider-inner">

			<div class="vertical-middle">
				<div class="container dark py-5 py-md-0">
					<div class="row d-flex justify-content-center mt-5 col-mb-50">
						<div class="col-lg-6 parallax">
						<h2 class="mb-2 white-text">Selamat Datang di</h2>
							<h2 class="font-weight-bold display-2 mb-0">SITAMA</h2>
							<h3 class="mb-2 white-text">Website ini digunakan untuk pendaftaran Magang,Penelitian dan PKL pada Dinas Komunikasi dan Informatika Kabupaten Sukoharjo</h3>

							<a class="menu-link" href="/login"><button type="button" class="btn btn-primary btn-lg btn-block">Login</button></a>
							<a class="menu-link" href="/registrasi"><button type="button" class="btn btn-primary btn-lg btn-block">Registration</button></a>
						</div>
					</div>
				</div>

			</div>
		</section><!-- #Slider end -->

		
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
[14.02, 29/3/2023] Vita IT20: ============================================= -->
	<script src="/frontend/js/jquery.js"></script>
	<script src="/frontend/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/frontend/js/functions.js"></script>

	<script>

		jQuery(document).ready( function(){

			// Ticket Price Changed Script
			var elementEarlyBird = $("#early-bird-person"),
				element1Day = $("#1-day-pricing-person"),
				element2Day = $("#2-day-pricing-person"),
				elementFull = $("#full-pricing-person");

			elementEarlyBird.on( 'change', function(){
				pricingEarlyBird = $(this).prop('value');
				jQuery('.early-bird-pricing').html( '$'+ (pricingEarlyBird * 39) );
			});

			element1Day.on( 'change', function(){
				pricing1day = $(this).prop('value');
				jQuery('.1-day-pricing').html( '$'+ (pricing1day * 29) );
			});

			element2Day.on( 'change', function(){
				pricing2Day = $(this).prop('value');
				jQuery('.2-day-pricing').html( '$'+ (pricing2Day * 49) );
			});

			elementFull.on( 'change', function(){
				pricingFull = $(this).prop('value');
				jQuery('.full-pricing').html( '$'+ (pricingFull * 69) );
			});

		});

	</script>

</body>
</html>