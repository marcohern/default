
<!-- Section Contacts Info >-->
<div class="section contacts" id="section-contacts">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">Contact</div>
      <div class="subtitle">Let's talk</div>
    </div>

    <!-- contact form -->
    <div class="contact-form">
      <form id="cform" method="post" action="/cv/contact">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="group-val">
          <div class="label">Full name <strong>*</strong></div>
            <input type="text" name="name" placeholder="ej.: Genoveva Lian Hullt" />
        </div>
        <div class="group-val">
          <div class="label">Email address <strong>*</strong></div>
          <input type="email" name="email" placeholder="example@domain.com" />
        </div>
        <div class="group-val">
          <div class="label">Message <strong>*</strong></div>
          <textarea name="message" placeholder="To Write"></textarea>
        </div>
        <div class="group-bts">
          <button type="submit" class="btn">
            <span class="animated-button"><span>Send Message</span></span>
            <i class="icon fas fa-chevron-right"></i>
          </button>
        </div>
      </form>
      <div class="alert-success">
        <p>Thanks, your message is sent successfully.</p>
      </div>
    </div>

    <!-- contact info -->
    <div class="contact-info">
      <div class="name">{{$profile->first_name}} {{$profile->last_name}}</div>
      <div class="subname">{{$profile->job_title}}</div>
      <div class="info-list">
        <ul>
          <li><strong>{{__('cv.about.age')}}:</strong> {{$profile->age}}</li>
          <li><strong>{{__('cv.about.residence')}}:</strong> {{$profile->residence}}</li>
          <li><strong>{{__('cv.about.email')}}:</strong> {{$profile->email}}</li>

        </ul>
      </div>
      <div class="author">{{$profile->first_name}} {{$profile->last_name}}</div>
    </div>

    <div class="clear"></div>
  </div>
</div>