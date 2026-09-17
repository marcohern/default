
<!-- Section Started -->
<div class="section started" id="section-started">
  <div class="centrize full-width">
    <div class="vertical-center">

      <!-- title -->
      <h1 class="h-title">
        {{ $profile->first_name }} <br />{{ $profile->last_name }}
      </h1>

      <!-- content started -->
      <div class="started-content">

        <x-cv.typed-job-titles :jobTitles="$profile->jobTitles"/>

        <!-- text -->
        <div class="h-text">
          {{$profile->articles->firstWhere('slug','intro')->text}}
        </div>

        <!-- button -->
        <a href="#section-contacts" class="btn">
          <span class="animated-button"><span>{{__('cv.contact_me')}}</span></span>
          <i class="icon fas fa-chevron-right"></i>
        </a>

        <!-- mosue button -->
        <a href="#" class="btn mouse-btn" style="display: none;">
          <i class="icon fas fa-chevron-down"></i>
        </a>

      </div>

    </div>
  </div>
</div>