
<!-- Section Resume -->
<div class="section resume" id="section-experience">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.resume.experience')}}</div>
      <div class="subtitle">{{__('cv.resume.working_with')}}</div>
    </div>

    <!-- resume items -->
    <div class="content-carousel">
      <div class="owl-carousel" data-slidesview="2" data-slidesview_mobile="1">
        @foreach ($experiences as $experience)
          <div class="item">
            <div class="resume-item active">
              @if ($experience->present)
              <div class="date">Present</div>
              @else
              <div class="date">{{$experience->startYear}}-{{$experience->endYear}}</div>
              @endif
              <div class="name">{{$experience->title}} <br />{{$experience->company_name}}</div>
              <div class="single-post-text">
                <p>
                  {{$experience->overview}}
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- navigation -->
      <div class="navs">
        <span class="prev fas fa-chevron-left"></span>
        <span class="next fas fa-chevron-right"></span>
      </div>

    </div>

  </div>
</div>