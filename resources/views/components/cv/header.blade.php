<!-- Header -->
<header class="header">
  <x-cv.logo :profile="$profile"/>

  <!-- menu button -->
  <a href="#" class="menu-btn"><span></span></a>
    
  <!-- download cv button -->
  <a href="{{url('/attachments/marcohern-cv-en.pdf')}}" class="btn download-cv-btn">
    <span class="animated-button"><span>{{ __('cv.menu-links.download_cv') }}</span></span>
    <i class="icon fas fa-download"></i>
  </a>

  <!-- header sidebar -->
  <div class="header-sidebar">
    <x-cv.menu-links/>
  </div>

</header>