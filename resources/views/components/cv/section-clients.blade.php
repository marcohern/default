
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
        @foreach([
          ['/logos/cit.svg','https://ciandt.com/','CI&T'],
          ['/logos/cmgfi.svg','https://www.cmgfi.com/','CMG Finantial'],
          ['/logos/bairesdev.svg','https://www.bairesdev.com/','BairesDev'],
          ['/logos/omnimed.svg','https://www.omnimed.ai/','Omnimed'],
          ['/logos/dealerrater.svg','https://www.dealerrater.com','DealerRater'],
          ['/logos/cafeto.svg','https://www.cafetosoftware.com','Cafeto'],
          ['/logos/globant.svg','https://globant.com/','Globant'],
          ['/logos/carnival.svg','https://www.carnival.com/','Carnival'],
          ['/logos/gap.svg','https://www.gap.com/','The GAP'],
          ['/logos/gire.svg','https://www.gire.com/','GIRE'],
          ['/logos/american-airlines.svg','https://www.aa.com/','American Airlines'],
          ['/logos/intcomex.svg','https://www.intcomex.com/','Intcomex']
        ] as $logo)
          <div class="item">
            <div class="clients-item">
              <a target="_blank" href="{{url($logo[1])}}" alt="{{empty($logo[2])?'':$logo[2]}}">
                <img src="{{url($logo[0])}}" alt="" />
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