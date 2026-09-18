<!doctype html>
<html lang="{{App::getLocale()}}">
<head>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="{{ $profile->description }}" />
	<meta name="keywords" content="resposive, resume, personal, personal portfolio, cv" />
	<meta name="author" content="{{ $profile->first_name }} {{ $profile->last_name }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />

  <x-cv.open-graph-headers :profile="$profile"/>

	<!-- Title -->
	<title>{{ $profile->first_name }} {{ $profile->last_name }}</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe&display=swap" rel="stylesheet">

	<!-- Styles & Scripts -->
	@vite(['resources/css/cv.css', 'resources/js/cv.js'])

	<link rel="shortcut icon" href="{{ Vite::asset('resources/images/cv/favicons/favicon.ico') }}">

</head>

<body class="home">

	<!-- Under Development ribbon — delete this block to remove the banner -->
	<div class="dev-ribbon"><span>{{ __('cv.under_maintenance') }}</span></div>

	<x-cv.preloader/>

	<!-- Container -->
	<div class="container">
	
		<!-- Header -->
		<header class="header">
			<x-cv.logo :profile="$profile"/>

			<!-- menu button -->
			<a href="#" class="menu-btn"><span></span></a>
				
			<!-- download cv button -->
			<a href="#" class="btn download-cv-btn">
				<span class="animated-button"><span>{{ __('cv.menu-links.download_cv') }}</span></span>
				<i class="icon fas fa-download"></i>
			</a>

			<!-- header sidebar -->
			<div class="header-sidebar">
        <x-cv.menu-links/>
			</div>

		</header>
		
		<!-- Wrapper -->
		<div class="wrapper">
      <x-cv.portrait-image/>
			<x-cv.section-start :profile="$profile"/>

      <x-cv.section-about :profile="$profile"/>

			<!--x-cv.section-services :services="$profile->services"/-->

      <x-cv.section-experience :experiences="$profile->workExperiences"/>

			<x-cv.section-education :education="$profile->educationExperiences"/>

      <!--x-cv.section-design-skills/-->

			<!-- Section Languages Skills -->
			<div class="section skills" id="section-skills-lang">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Language Skills</div>
						<div class="subtitle">Reading and writing</div>
					</div>

					<!-- skills items -->
					<div class="skills dotted">
						<ul>
							<li>
								<div class="name">English</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">German</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 70%;">
										<span class="percent">70%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Italian</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 55%;">
										<span class="percent">55%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">French</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 85%;">
										<span class="percent">85%</span>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>

			</div>

			<!-- Section Coding Skills -->
			<div class="section skills" id="section-skills-code">
				<div class="content">
					
					<!-- title -->
					<div class="titles">
						<div class="title">Coding Skills</div>
						<div class="subtitle">Developing on</div>
					</div>

					<!-- skills items-->
					<div class="skills circles">
						<ul>
							<li>
								<div class="progress p90"> <!-- p90 = 90% circle fill color -->
									<div class="percentage"></div>
									<span>90%</span>
								</div>
								<div class="name">WordPress</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
							<li>
								<div class="progress p75"> <!-- p75 = 75% circle fill color -->
									<div class="percentage"></div>
									<span>75%</span>
								</div>
								<div class="name">PHP, MYSQL</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
							<li>
								<div class="progress p85"> <!-- p85 = 85% circle fill color -->
									<div class="percentage"></div>
									<span>85%</span>
								</div>
								<div class="name">JavaScript</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
							<li>
								<div class="progress p80"> <!-- p80 = 80% circle fill color -->
									<div class="percentage"></div>
									<span>80%</span>
								</div>
								<div class="name">Angular</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
							<li>
								<div class="progress p95"> <!-- p95 = 95% circle fill color -->
									<div class="percentage"></div>
									<span>95%</span>
								</div>
								<div class="name">HTML, CSS</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
							<li>
								<div class="progress p90"> <!-- p90 = 90% circle fill color -->
									<div class="percentage"></div>
									<span>90%</span>
								</div>
								<div class="name">Python</div>
								<div class="single-post-text">
									<p>
										Etiam sit amet orci eget eros faucibus tincidunt.
									</p>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Section Testimonials -->
			<div class="section testimonials" id="section-testimonials">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Reviews</div>
						<div class="subtitle">What customers say</div>
					</div>

					<!-- testimonials items -->
					<div class="content-carousel">
						<div class="owl-carousel" data-slidesView="2" data-slidesview_mobile="1">

							<div class="item">
								<div class="reviews-item">
									<div class="image">
										<img src="{{ Vite::asset('resources/images/cv/rev1.png') }}" alt="">
									</div>
									<div class="info">
										<div class="name">Joseph Mackey</div>
										<div class="company">Architect</div>
									</div>
									<div class="text">
										Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
									</div>
								</div>
							</div>

							<div class="item">
								<div class="reviews-item">
									<div class="image">
										<img src="{{ Vite::asset('resources/images/cv/rev1.png') }}" alt="">
									</div>
									<div class="info">
										<div class="name">James Green</div>
										<div class="company">Art Director</div>
									</div>
									<div class="text">
										Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
									</div>
								</div>
							</div>

							<div class="item">
								<div class="reviews-item">
									<div class="image">
										<img src="{{ Vite::asset('resources/images/cv/rev1.png') }}" alt="">
									</div>
									<div class="info">
										<div class="name">Joseph Mackey</div>
										<div class="company">Architect</div>
									</div>
									<div class="text">
										Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
									</div>
								</div>
							</div>

							<div class="item">
								<div class="reviews-item">
									<div class="image">
										<img src="{{ Vite::asset('resources/images/cv/rev1.png') }}" alt="">
									</div>
									<div class="info">
										<div class="name">James Green</div>
										<div class="company">Art Director</div>
									</div>
									<div class="text">
										Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
									</div>
								</div>
							</div>

						</div>

						<!-- navigation -->
						<div class="navs">
							<span class="prev fas fa-chevron-left"></span>
							<span class="next fas fa-chevron-right"></span>
						</div>

					</div>
					
				</div>
			</div>

			<!-- Section Clients -->
			<div class="section clients" id="section-clients">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Clients</div>
						<div class="subtitle">My partners</div>
					</div>

					<!-- clients items -->
					<div class="content-carousel">
						<div class="owl-carousel" data-slidesview="4" data-slidesview_mobile="2">

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client2.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client3.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client1.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client4.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client2.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client3.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client1.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="item">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ Vite::asset('resources/images/cv/client4.png') }}" alt="" />
									</a>
								</div>
							</div>

						</div>

						<!-- navigation -->
						<div class="navs">
							<span class="prev fas fa-chevron-left"></span>
							<span class="next fas fa-chevron-right"></span>
						</div>

					</div>
					
					<div class="clear"></div>
				</div>
			</div>

			<!-- Works -->
			<div class="section works" id="section-portfolio">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Portfolio</div>
						<div class="subtitle">Latest works</div>
					</div>

					<!-- filter -->
					<div class="filter-menu">
						<div class="filters">
							<div class="btn-group">
								<label data-text="All" class="glitch-effect">
									<input type="radio" name="fl_radio" value=".box-col" />All
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Video">
									<input type="radio" name="fl_radio" value=".f-video" />Video
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Music">
									<input type="radio" name="fl_radio" value=".f-music" />Music
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Links">
									<input type="radio" name="fl_radio" value=".f-links" />Links
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Image">
									<input type="radio" name="fl_radio" value=".f-image" />Image
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Gallery">
									<input type="radio" name="fl_radio" value=".f-gallery" />Gallery
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Content">
									<input type="radio" name="fl_radio" value=".f-content" />Content
								</label>
							</div>
							
						</div>
					</div>

					<!-- portfolio items -->
					<div class="box-items">	

						<div class="box-col f-gallery">
							<div class="box-item">
								<div class="image">
									<a href="#gallery-1" class="has-popup-gallery">
										<img src="{{ Vite::asset('resources/images/cv/works/work1.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-images"></i>
												</span>
											</span>
										</span>
									</a>
									<div id="gallery-1" class="mfp-hide">
										<a href="{{ Vite::asset('resources/images/cv/works/work1.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}"></a>
									</div>
								</div>
								<div class="desc">
									<div class="category">Gallery</div>
									<a href="#gallery-1" class="name has-popup-gallery">Alabaster Complete Collection</a>
								</div>
							</div>
						</div>

						<div class="box-col f-video">
							<div class="box-item">
								<div class="image">
									<a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video">
										<img src="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-video"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Video</div>
									<a href="https://youtu.be/S4L8T2kFFck" class="name has-popup-video">Book of John Paper</a>
								</div>
							</div>
						</div>

						<div class="box-col f-image">
							<div class="box-item">
								<div class="image">
									<a href="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" class="has-popup-image">
										<img src="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-image"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Image</div>
									<a href="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" class="name has-popup-image">White Rose Photo</a>
								</div>
							</div>
						</div>

						<div class="box-col f-image">
							<div class="box-item">
								<div class="image">
									<a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" class="has-popup-image">
										<img src="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-image"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Image</div>
									<a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" class="name has-popup-image">Honest Company</a>
								</div>
							</div>
						</div>

						<div class="box-col f-gallery">
							<div class="box-item">
								<div class="image">
									<a href="#gallery-2" class="has-popup-gallery">
										<img src="{{ Vite::asset('resources/images/cv/works/work5.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-images"></i>
												</span>
											</span>
										</span>
									</a>
									<div id="gallery-2" class="mfp-hide">
										<a href="{{ Vite::asset('resources/images/cv/works/work5.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}"></a>
										<a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}"></a>
									</div>
								</div>
								<div class="desc">
									<div class="category">Gallery</div>
									<a href="#gallery-2" class="name has-popup-gallery">Brown Short Dog</a>
								</div>
							</div>
						</div>

						<div class="box-col f-music">
							<div class="box-item">
								<div class="image">
									<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="has-popup-music">
										<img src="{{ Vite::asset('resources/images/cv/works/work6.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-music"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Music</div>
									<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="name has-popup-music">Brown Concrete Building</a>
								</div>
							</div>
						</div>

						<div class="box-col f-links">
							<div class="box-item">
								<div class="image">
									<a href="https://beshley.com/" class="has-popup-link" target="_blank">
										<img src="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-link"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Links</div>
									<a href="https://beshley.com/" class="name has-popup-link">Black Car</a>
								</div>
							</div>
						</div>

						<div class="box-col f-content">
							<div class="box-item">
								<div class="image">
									<a href="#popup-1" class="has-popup-media">
										<img src="{{ Vite::asset('resources/images/cv/works/work8.jpg') }}" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-plus"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Content</div>
									<a href="#popup-1" class="name has-popup-media">Yellow and Blue Striped</a>
								</div>
								<div id="popup-1" class="popup-box mfp-fade mfp-hide">
									<div class="content">
										<div class="image">
											<img src="{{ Vite::asset('resources/images/cv/works/work8.jpg') }}" alt="">
										</div>
										<div class="desc">
											<div class="category">Content</div>
											<h4>Yellow and Blue Striped</h4>
											<p>
												Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata 
												suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
											</p>
											<a href="#" class="btn">
												<span class="animated-button"><span>View Project</span></span>
												<i class="icon fas fa-chevron-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Contacts Info >-->
			<div class="section contacts" id="section-contacts">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Contact</div>
						<div class="subtitle">Let's talk</div>
					</div>

					<!-- contact form -->
					<div class="contact-form">
						<form id="cform" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<div class="group-val">
								<div class="label">Full name <strong>*</strong></div>
   								<input type="text" name="name" placeholder="ej.: Genoveva Lian Hullt" />
							</div>
							<div class="group-val">
								<div class="label">Email address <strong>*</strong></div>
								<input type="email" name="email" placeholder="example@domain.com" />
							</div>
							<div class="group-val">
								<div class="label">Message <strong>*</strong></div>
								<textarea name="message" placeholder="To Write"></textarea>
							</div>
							<div class="group-bts">
								<button type="submit" class="btn">
									<span class="animated-button"><span>Send Message</span></span>
									<i class="icon fas fa-chevron-right"></i>
								</button>
							</div>
						</form>
						<div class="alert-success">
							<p>Thanks, your message is sent successfully.</p>
						</div>
					</div>

					<!-- contact info -->
					<div class="contact-info">
						<div class="name">{{$first_name}} {{$last_name}}</div>
						<div class="subname">{{$job_titles['softeng']}}</div>
						<div class="info-list">
							<ul>
                <li><strong>{{$about_info['l_age']}}:</strong> {{$age}}</li>
                <li><strong>{{$about_info['l_residence']}}:</strong> {{$residence}}</li>
                <li><strong>{{$about_info['l_email']}}:</strong> {{$email}}</li>

							</ul>
						</div>
						<div class="author">{{$first_name}} {{$last_name}}</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

		</div>
		
		<!-- Footer -->
		<footer class="footer">
			<div class="socials">
				<a target="_blank" href="https://www.facebook.com/marcohern">
					<i class="icon fab fa-facebook-f"></i>
				</a>
        <a target="_blank" href="https://www.x.com/marquiniopinio">
					<i class="icon fab fa-twitter"></i>
				</a>
        <a href="{{ url('/cv/en') }}">
          <span class="lang-icon">EN</span>
				</a>
        <a href="{{ url('/cv/es') }}">
          <span class="lang-icon">ES</span>
				</a>
			</div>
		</footer>
		
	</div>

	<!-- Scripts -->
	<script src="{{ Vite::asset('resources/js/cv/jquery.min.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/velocity.min.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/jquery.validate.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/magnific-popup.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/typed.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/jarallax.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/jarallax-video.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/jarallax-element.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/imagesloaded.pkgd.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/isotope.pkgd.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/owl.carousel.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/swiper.js') }}"></script>
	<script src="{{ Vite::asset('resources/js/cv/scripts.js') }}"></script>

</body>
</html>