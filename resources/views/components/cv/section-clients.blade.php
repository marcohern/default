
<!-- Section Clients -->
<div class="section clients" id="section-clients">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.resume.clients')}}</div>
      <div class="subtitle">{{__('cv.resume.my_partners')}}</div>
    </div>

    <!-- clients items -->
    <div class="content-carousel">
      <div class="owl-carousel" data-slidesview="4" data-slidesview_mobile="2">
        @foreach($clients as $client)
          <div class="item">
            <div class="clients-item">
              <a target="_blank" href="{{$client->web_uri}}" alt="{{empty($client->title)?'':$client->title}}">
                <img src="{{url($client->logo_uri)}}" alt="" />
              </a>
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
    
    <div class="clear"></div>
  </div>
</div>