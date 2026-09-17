
<!-- Section About -->
<div class="section about" id="section-about">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.about.title')}}</div>
      <div class="subtitle">{{__('cv.about.my_story')}}</div>
    </div>

    <!-- text -->
    <div class="cols">
      <div class="col">
        <div class="single-post-text">
          <p>
            {{$profile->articles->firstWhere('slug','about-1')->text}}
          </p>
        </div>
      </div>
      <div class="col">
        <div class="single-post-text">
          <p>
            {{$profile->articles->firstWhere('slug','about-2')->text}}
          </p>
        </div>
      </div>
      <div class="col col-full">
        <div class="single-post-text">
          <p>
            {{$profile->articles->firstWhere('slug','about-3')->text}}
          </p>
        </div>
      </div>
    </div>

    <!-- info list -->
    <div class="info-list">
      <ul>
        <li><strong>{{__('cv.about.age')}}:</strong> {{$profile->age}}</li>
        <li><strong>{{__('cv.about.residence')}}:</strong> [Colombia]</li>
        <li><strong>{{__('cv.about.email')}}:</strong> {{$profile->email}}</li>
      </ul>
    </div>

    <div class="clear"></div>
  </div>
</div>