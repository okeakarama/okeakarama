@extends('layouts.front')

@section('content')

	@include('front.menu')

	<!-- Player section -->
	<section class="player-section set-bg" data-setbg="asset/front/img/player-bg.jpg">
		<div class="player-box">
			<div class="tarck-thumb-warp">
				<div class="tarck-thumb">
					<img src="asset/front/img/wave-thumb.jpg" alt="">
					<!-- <button onclick="wavesurfer.playPause();" class="wp-play"></button> -->
				</div>
			</div>
			<div class="wave-player-warp">
				<div class="row">
					<div class="col-lg-12">
						<div class="wave-player-info">
							<h2><span style="color:#FC1E54">About</span> <br> THANKGOD MADUKA</h2>
							<p>Philomath | Software Craftsman | Public Speaker </p>
						</div>
					</div>
					<!-- <div class="col-lg-4">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Player section end -->

	<!-- Songs details section -->
	<section class="songs-details-section">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<div class="song-details-box">
								<h3>About TG</h3>
								<div class="artist-details">
									<!-- <img src="asset/front/img/artist.jpg" alt=""> -->
									<div class="ad-text">
										<!-- <h5>Michael Smith</h5>
										<span>Artist/ Songwriter</span> -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="song-details-box">
								<h3>Entrepreneurship</h3>
								<div class="artist-details">
									<!-- <img src="asset/front/img/artist.jpg" alt=""> -->
									<div class="ad-text">
										<!-- <h5>Michael Smith</h5>
										<span>Artist/ Songwriter</span> -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="song-details-box">
								<h3>Life as a developer</h3>
								<div class="artist-details">
									<!-- <img src="asset/front/img/artist.jpg" alt=""> -->
									<div class="ad-text">
										<!-- <h5>Michael Smith</h5>
										<span>Artist/ Songwriter</span> -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Songs details section -->

	@endsection
