
<!-- Section Coding Skills -->
<div class="section skills" id="section-skills-code">
  <div class="content">
    
    <!-- title -->
    <div class="titles">
      <div class="title">{{__('cv.resume.coding_skills')}}</div>
      <div class="subtitle">{{__('cv.resume.developing_on')}}</div>
    </div>

    <!-- skills items-->
    <div class="skills circles">
      <ul>
        @foreach($codingSkills as $skill)
        <li>
          <div class="progress p{{$skill->score}}"> <!-- p90 = 90% circle fill color -->
            <div class="percentage"></div>
            <span>{{$skill->score}}%</span>
          </div>
          <div class="name">{{$skill->title}}</div>
          <div class="single-post-text">
            <p>
              {{__($skill->text)}}
            </p>
          </div>
        </li>
        @endforeach
      </ul>
    </div>

  </div>
</div>