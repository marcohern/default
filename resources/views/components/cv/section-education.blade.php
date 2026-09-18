
<!-- Section Resume -->
<div class="section resume" id="section-education">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.resume.education')}}</div>
      <div class="subtitle">{{__('cv.resume.studied_at')}}</div>
    </div>

    <!-- resume items -->
    <div class="content-carousel">
      <div class="owl-carousel" data-slidesview="2" data-slidesview_mobile="1">

        @foreach($education as $ed)
        <div class="item">
          <div class="resume-item active">
            @if ($ed->present)
              <div class="date">{{__('cv.resume.present')}}</div>
              @else
              <div class="date">{{$ed->startYear}}-{{$ed->endYear}}</div>
              @endif
            <div class="date">2003-2005</div>
            <div class="name">{{$ed->school_name}} <br />{{$ed->degree}}</div>
            <div class="single-post-text">
              <p>
                {{__($ed->overview)}}
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