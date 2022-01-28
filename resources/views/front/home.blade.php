@extends('layouts.front')

@section('content')

	<!-- Start Home Section -->
	<section id="home" class="hero-wrap js-fullheight" style="background-image: url({{ asset('asset/front/images/ok_me_5.jpg') }});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			<div class="col-lg-7 ftco-animate d-flex align-items-center">
				<div class="text text-center">
					<!-- <h1 class="logo"><a href="index.html"><span class="flaticon-camera-shutter"></span>Snapshot<small>Photographer / San Francisco</small></a></h1> -->
							<h1 class="mb-4">I am <br>Nnana Ajah</h1>
							<p class="mb-4">
							  A full stack web developer, brand identity developer and graphic designer with over 6 years experience creating beauty.
							  <br> Welcome to my World!
						  </p>
							<p class="mt-5">
							  <a data-scroll="about" href="#about" class="btn-custom">
								  About me <span class="ion-ios-arrow-round-forward"></span>
							  </a>
						  </p>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
		  <!-- End Home Section -->
  
		  <!-- Start About Me Section -->
		  <section class="ftco-about img ftco-section" id="about">
		  <div class="container">
			  <div class="row d-flex no-gutters">
				  <div class="col-md-6 col-lg-6 d-flex">
					  <div class="img-about img d-flex align-items-stretch">
						  <div class="overlay"></div>
						  <div class="img img-video d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('asset/front/images/ok_me_11.jpg') }});">
							  <div class="video justify-content-center">
									  <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
										  <span class="ion-ios-play"></span>
									</a>
								  </div>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-6 col-lg-6 pl-md-5">
				<div class="heading-section ftco-animate">
				  <h2 class="mb-4">Nnanna Ajah is a Web developer, <br>Graphic designer and Tutor</h2>
				  <p>
					  I am a Computer Science graduate from Gregory University, I also have a Master Degree in Computer Science in view.
					  I have explored the tech space with focus on web based technologies and graphic design. I am a self-taught designer,
					  with for over 6 years of experience creating beauty. I help brands pick a unique identity to stand out in the market. 
					  I picked an interesting in programming and decided to major in web development because it is the most relateable.
					  I am familiar with a few web technologies like 
					  HTML, CSS, Javascript, React.js, Node.js, C# (ASP.NET), PHP (Laravel and Codeigniter) and Python (Django).
				  </p>
  
				  <div class="counter-wrap ftco-animate d-flex my-md-4">
					<div class="text">
						<p class="mb-4">
						  <span class="number" data-number="137">0</span>
						  <span>Project complete</span>
					  </p>
					</div>
					</div>
					<div class="d-flex w-100">
					  <div class="img img-about-2 mr-2" style="background-image: url({{ asset('asset/front/images/ok_bg_2.jpg') }});"></div>
					  <div class="img img-about-2 ml-2" style="background-image: url({{ asset('asset/front/images/ok_bg_3.jpg') }});"></div>
					</div>
					<blockquote class="blockquote mt-5">
						<p class="mb-2">"Whatever is thinkable, I believe is doable..."</p>
						<span>&mdash; Nnanna Ajah </span>
					</blockquote>
				</div>
			  </div>
		  </div>
		  </div>
	  </section>
		  <!-- End About Me Section -->
  
		  <!-- Start Services Section -->
		  <section id="services" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-5 heading-section ftco-animate pb-5">
					  <h2 class="mb-4">My Skills</h2>
					  <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p> -->
					</div>
						</div>
						<div class="row">
					  <div class="col-md-4">
						  <div class="media block-6 services d-block ftco-animate">
						<div class="icon"><img src="{{ asset('asset/front/images/flaticons/002-coding-1.png') }}" style="margin-bottom: 1rem;" alt="coding"></div>
						<div class="media-body">
						  <h3 class="heading mb-3">Fullstack Web Development</h3>
						  <p>
							  I have a good knowledge of web development tools like HTML, CSS, Javascript, Bootstrap, React.js, Node.js, C# (ASP.NET), 
							  PHP, Python, MySQL and MongoDB.
						  </p>
						</div>
					  </div> 
					  </div>
					  <div class="col-md-4">
						  <div class="media block-6 services d-block ftco-animate">
						<div class="icon"><img src="{{ asset('asset/front/images/flaticons/003-branding.png') }}" style="margin-bottom: 1rem;" alt="coding"></div>
						<div class="media-body">
						  <h3 class="heading mb-3">Brand Identity development</h3>
						  <p>
							  I have mastered the skill of branding as I help brands get a unique identity to stand out amongst other competitors.
							  Good branding never goes wrong.
						  </p>
						</div>
					  </div> 
					  </div>
					  <div class="col-md-4">
						  <div class="media block-6 services d-block ftco-animate">
						<div class="icon"><img src="{{ asset('asset/front/images/flaticons/007-vector.png') }}" style="margin-bottom: 1rem;" alt="coding"></div>
						<div class="media-body">
						  <h3 class="heading mb-3">Graphic Design</h3>
						  <p>
							  I am familiar with graphics design concepts and principle which makes the difference. 
							   My favourite tools include Photoshop, Illustrator, InDesign and CorelDraw.
							  
						  </p>
						</div>
					  </div> 
					  </div>
				  </div>
			  </div>
			  <div class="col-md-3 d-flex align-items-stretch">
				  <div class="img w-100" style="background-image: url({{ asset('asset/front/images/ok_me_11.jpg') }});"></div>
			  </div>
		  </div>
		  <div class="row progress-circle pt-md-5">
			  <div class="col-md-7 order-md-last py-md-5">
				  <div class="row">
							<div class="col-md-4 mb-md-0 mb-4 ftco-animate">
							<div class="">
							  <h2 class="text-center mb-4">Development</h2>
  
							  <!-- Progress bar 1 -->
							  <div class="progress mx-auto" data-value='80'>
								<span class="progress-left">
							<span class="progress-bar border-primary"></span>
								</span>
								<span class="progress-right">
							<span class="progress-bar border-primary"></span>
								</span>
								<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								  <div class="h5">80<sup class="small">%</sup></div>
								</div>
							  </div>
							  <!-- END -->
							</div>
						  </div>
  
						  <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
							<div class="">
							  <h2 class="text-center mb-4">Branding</h2>
  
							  <!-- Progress bar 1 -->
							  <div class="progress mx-auto" data-value='75'>
								<span class="progress-left">
							<span class="progress-bar border-primary"></span>
								</span>
								<span class="progress-right">
							<span class="progress-bar border-primary"></span>
								</span>
								<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								  <div class="h5">75<sup class="small">%</sup></div>
								</div>
							  </div>
							  <!-- END -->
							</div>
						  </div>
  
						  <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
							<div class="">
							  <h2 class="text-center mb-4">Designing</h2>
  
							  <!-- Progress bar 1 -->
							  <div class="progress mx-auto" data-value='90'>
								<span class="progress-left">
							<span class="progress-bar border-primary"></span>
								</span>
								<span class="progress-right">
							<span class="progress-bar border-primary"></span>
								</span>
								<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								  <div class="h5">90<sup class="small">%</sup></div>
								</div>
							  </div>
							  <!-- END -->
							</div>
						  </div>
  
						  <div class="p-md-4 mt-4">
							  <div class="col-md-8 ftco-animate">
								  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast.</p>
							  </div>
						  </div>
						</div>
					  </div>
					  <div class="col-md-5 d-flex align-items-stretch">
				  <div class="img w-100" style="background-image: url({{ asset('asset/front/images/ok_bg_4.jpg') }});"></div>
			  </div>
				</div>
			</div>
		  </section>  
		  <!-- End Services Section -->
  
		  <!-- Start Testimonials Section -->
		  <section id="work" class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 heading-section text-center ftco-animate pb-5">
			  <h2 class="mb-4">Selected Projects</h2>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
			</div>
				</div>
			</div> 
			<div class="container-fluid px-md-0">
		  <div class="row no-gutters">
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-1.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-1.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-2.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-2.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-3.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-3.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
  
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-4.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-4.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-5.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-5.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-6.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-6.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
  
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-7.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-7.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-8.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-8.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-9.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-9.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
  
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-10.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-10.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-11.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-11.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-md-4 ftco-animate">
			  <div class="model img d-flex align-items-end" style="background-image: url({{ asset('asset/front/images/model-12.jpg') }});">
				  <a href="{{ asset('asset/front/images/model-12.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
							  <span class="icon-expand"></span>
						  </a>
				  <div class="desc w-100 px-4">
					<div class="text w-100 mb-3">
						<span>Nature</span>
						<h2><a href="work-single.html">Beautiful Work</a></h2>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div> 
		  </section>
		  <!-- End Project Section -->
  
		  <section class="ftco-section testimony-section" id="testimonial">
			  <div class="container">
				  <div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-4 heading-section ftco-animate">
				<span class="subheading">Testimony</span>
			  <h2 class="mb-4">Our satisfied customer says</h2>
			  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			</div>
		  </div>
		  <div class="row ftco-animate">
			<div class="col-md-12">
			  <div class="carousel-testimony owl-carousel">
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-4" style="background-image: url({{ asset('asset/front/images/person_1.jpg') }})">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text">
					  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					  <div class="pl-5">
						  <p class="name">Garreth Smith</p>
						  <span class="position">CEO Founder of Commercial Building</span>
					  </div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-4" style="background-image: url({{ asset('asset/front/images/person_2.jpg') }})">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text">
					  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					  <div class="pl-5">
						  <p class="name">Garreth Smith</p>
						  <span class="position">CEO Founder of Interior Design</span>
						</div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-4" style="background-image: url({{ asset('asset/front/images/person_3.jpg') }})">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text">
					  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					  <div class="pl-5">
						  <p class="name">Garreth Smith</p>
						  <span class="position">Exterior Designer</span>
						</div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-4" style="background-image: url({{ asset('asset/front/images/person_1.jpg') }})">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text">
					  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					  <div class="pl-5">
						  <p class="name">Garreth Smith</p>
						  <span class="position">Landscape Designer</span>
						</div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-4" style="background-image: url({{ asset('asset/front/images/person_1.jpg') }})">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text">
					  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					  <div class="pl-5">
						  <p class="name">Garreth Smith</p>
						  <span class="position">System Analyst</span>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
			  </div>
		  </section>
  
		  <!-- Start Contact Section -->
		  <section class="ftco-section contact-section" id="contact">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-4 heading-section text-center ftco-animate">
			  <h2 class="mb-4">Contact Me</h2>
			  <p>I will be very delighted to hear from you, looking forward</p>
			</div>
		  </div>
  
		  <div class="row mb-5">
			<div class="col-md-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-map-signs"></span>
					</div>
					<div>
						<h3 class="mb-4">Address</h3>
					  <p>Nkata bypass Okwuta Ibeku, Umuahia Nigeria</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<div>
						<h3 class="mb-4">Contact Number</h3>
					  <p><a href="tel://08104358838">+234810-4358-838</a></p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<div>
						<h3 class="mb-4">Email Address</h3>
					  <p><a href="okeakarama@gmail.com">okeakarama@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-globe"></span>
					</div>
					<div>
						<h3 class="mb-4">Website</h3>
					  <p><a href="#">yoursite.com</a></p>
				  </div>
				</div>
			</div>
		  </div>
  
		  <div class="row block-9">
			<div class="col-md-6 ftco-animate">
			  <form action="#" class="contact-form p-4 p-md-5 py-md-5">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Your Email">
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Subject">
				</div>
				<div class="form-group">
				  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
				  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
				</div>
			  </form>
			</div>
  
			<div class="col-md-6 d-flex align-items-stretch">
				<div id="map"></div>
			</div>
		  </div>
		</div>
	  </section>
		  <!-- End Contact Section -->

@endsection
