<!doctype html>
<html lang="en">
<head>
  <title>{{ $title ?? '' }} - {{  config('app.name', 'Laravel')  }}  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Best online movie and show streaming platform" />

  	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('asset/front/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('asset/front/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('asset/front/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('asset/front/css/slicknav.min.css') }}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('asset/front/css/style.css') }}"/>

</head>
<body>

	<div id="preloder">
		<div class="loader"></div>
	</div>

	@yield('content')

    <!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="">About TG</a></li>
									<li><a href="">Entrepreneurship</a></li>
									<li><a href="">Life as a developer</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Podcast</h2>
								<ul>
									<li><a href="">Music</a></li>
									<li><a href="">Subscription</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Playlists</h2>
								<ul>
									<li><a href="">Newsletter</a></li>
									<li><a href="">Careers</a></li>
									<li><a href="">Press</a></li>
									<li><a href="">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img src="img/logo.png" alt="">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://abiatechhub.com" target="_blank">Abia Tech Hub</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
	
	<!--====== Javascripts & Jquery ======-->
	
	<script src="{{ asset('asset/front/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('asset/front/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('asset/front/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('asset/front/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('asset/front/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('asset/front/js/main.js') }}"></script>

</body>

</html>
