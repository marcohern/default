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

      <x-cv.section-language-skills :languages="$profile->languages"/>

      <x-cv.section-coding-skills/>

			<!--x-cv.section-reviews/-->

      <!--x-cv.section-clients/-->
      
      <x-cv.section-portfolio/>

      <x-cv.section-contact-me :profile="$profile"/>

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