<!-- Section Service -->
<div class="section service" id="section-services">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.about.services')}}</div>
      <div class="subtitle">{{__('cv.about.what_i_do')}}</div>
    </div>

    <!-- services items -->
    <div class="service-items">

    @foreach ($services as $service)
    <div class="service-col">
        <div class="service-item">
          <div class="icon"><i class="{{$service->icon_css}}"></i></div>
          <div class="name">{{$service->title}}</div>
          <div class="single-post-text">
            <p>
              {{$service->text}}
            </p>
          </div>
        </div>
      </div>
    @endforeach
    </div>

    <div class="clear"></div>
  </div>
</div>