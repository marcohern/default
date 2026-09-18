
<!-- Section Languages Skills -->
<div class="section skills" id="section-skills-lang">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.resume.lang_skills')}}</div>
      <div class="subtitle">{{__('cv.resume.rnw')}}</div>
    </div>

    <!-- skills items -->
    <div class="skills dotted">
      <ul>
        @foreach($languages as $language)
          <li>
            <div class="name">{{$language->name}}</div>
            <div class="single-post-text">
              <p>
                {{$language->description}}
              </p>
            </div>
            <div class="progress">
              <div class="percentage" style="width: {{$language->score}}%;">
                <span class="percent">{{$language->score}}%</span>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>

  </div>

</div>