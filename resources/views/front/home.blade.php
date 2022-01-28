@extends('layouts.front')

@section('content')

	@include('front.menu')

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>As I do, </span>I learn,<span> As I learn, </span>I do </h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p> -->
								<a href="podcast" class="site-btn">Listen to Podcast</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="asset/front/img/hero-bg.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Listen </span> to new music.</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
								<a href="podcast" class="site-btn">Listen to Podcast</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="asset/front/img/hero-bg.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Category section -->
	<section class="category-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Live Concert Playlist</h2>
			</div>
			<div class="container">
				<div class="category-links">
					<a href="" class="active">Genres</a>
					<a href="">Artists</a>
					<a href="">All Playlist</a>
				</div>
			</div>
			<div class="category-items">
				<div class="row">
					<div class="col-md-4">
						<div class="category-item">
							<img src="asset/front/img/playlist/9.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="asset/front/img/playlist/2.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="asset/front/img/playlist/7.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

	<!-- Songs section  -->
	<section class="songs-section">
		<div class="container">
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/1.jpg" alt="">
							<div class="song-info">
								<h4>Jennifer Brown</h4>
								<p>One Night in Ibiza</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="asset/front/music-files/1.mp3"></div>
								<div class="jp-audio jp_container_1" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
										<!-- Progress Bar -->
										<div class="player_bars">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/2.jpg" alt="">
							<div class="song-info">
								<h4>Michael Smith</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="asset/front/music-files/2.mp3"></div>
								<div class="jp-audio jp_container_2" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/3.jpg" alt="">
							<div class="song-info">
								<h4>Indeed</h4>
								<p>In the park</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_3" data-url="asset/front/music-files/3.mp3"></div>
								<div class="jp-audio jp_container_3" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/4.jpg" alt="">
							<div class="song-info">
								<h4>Moon man</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_4" data-url="asset/front/music-files/4.mp3"></div>
								<div class="jp-audio jp_container_4" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/5.jpg" alt="">
							<div class="song-info">
								<h4>Neens</h4>
								<p>One Night in Ibiza</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_5" data-url="asset/front/music-files/5.mp3"></div>
								<div class="jp-audio jp_container_5" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/6.jpg" alt="">
							<div class="song-info">
								<h4>The Smiths</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_6" data-url="asset/front/music-files/6.mp3"></div>
								<div class="jp-audio jp_container_6" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/7.jpg" alt="">
							<div class="song-info">
								<h4>Don’t Stop</h4>
								<p>Turn up the music</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_7" data-url="asset/front/music-files/7.mp3"></div>
								<div class="jp-audio jp_container_7" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="asset/front/img/songs/8.jpg" alt="">
							<div class="song-info">
								<h4>The Reds</h4>
								<p>Love is in the air</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_8" data-url="asset/front/music-files/8.mp3"></div>
								<div class="jp-audio jp_container_8" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">

											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="asset/front/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="asset/front/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="site-pagination pt-5 mt-5">
				<a href="#" class="active">01.</a>
				<a href="#">02.</a>
				<a href="#">03.</a>
				<a href="#">04.</a>
			</div>
		</div>
	</section>
	<!-- Songs section end -->

@endsection
