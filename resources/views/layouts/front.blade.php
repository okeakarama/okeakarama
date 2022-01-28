<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to My Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('asset/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/front/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('asset/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/css/style.css') }}">
  </head>
  <body>

  	<nav id="navbar" class="navbar">
		  <ul class="nav-menu">
		    <li>
		      <a data-scroll="home" href="#home" class="dot active">
		        <span>Home</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="about" href="#about" class="dot">
		        <span>About</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="services" href="#services" class="dot">
		        <span>Skills</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="work" href="#work" class="dot">
		        <span>Gallery</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="testimonial" href="#testimonial" class="dot">
		        <span>Testimony</span>
		      </a>
		    </li>
		    <li>
		      <a data-scroll="contact" href="#contact" class="dot">
		        <span>Contact</span>
		      </a>
		    </li>
		  </ul>
		</nav>
		<!-- End Nav Section -->



	@yield('content')


<!-- Start Footer Section -->
		<footer class="ftco-footer py-5">
		  <div class="container text-center">
		    <div class="row">
          <div class="col-md-12 text-center">

            <p>
  				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://karamacreative.com" target="_blank">Karama Creative</a>
  			</p>

					  <ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
			  <li class="ftco-animate"><a href="https://www.twitter.com/okeakarama"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/okeakarama"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/okeakarama"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
		  </div>
		</footer>
		<!-- End Footer Section -->
   

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{ asset('asset/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/aos.js') }}"></script>
    <script src="{{ asset('asset/front/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('asset/front/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('asset/front/js/google-map.js') }}"></script>
    <script src="{{ asset('asset/front/js/main.js') }}"></script>
  </body>
</html>