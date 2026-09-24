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
	<!--div class="dev-ribbon"><span>{{ __('cv.under_maintenance') }}</span></div-->

	<x-cv.preloader/>

	<!-- Container -->
	<div class="container">
	
		<x-cv.header/>
		
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

      <x-cv.section-coding-skills :codingSkills="$profile->codingSkills"/>

			<!--x-cv.section-reviews/-->

      <x-cv.section-clients :clients="$profile->clients"/>
      
      <!--x-cv.section-portfolio/-->

      <x-cv.section-contact-me :profile="$profile"/>

		</div>
		
		<x-cv.footer/>
		
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