
<!-- Works -->
<div class="section works" id="section-portfolio">
  <div class="content">

    <!-- title -->
    <div class="titles">
      <div class="title">Portfolio</div>
      <div class="subtitle">Latest works</div>
    </div>

    <!-- filter -->
    <div class="filter-menu">
      <div class="filters">
        <div class="btn-group">
          <label data-text="All" class="glitch-effect">
            <input type="radio" name="fl_radio" value=".box-col" />All
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Video">
            <input type="radio" name="fl_radio" value=".f-video" />Video
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Music">
            <input type="radio" name="fl_radio" value=".f-music" />Music
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Links">
            <input type="radio" name="fl_radio" value=".f-links" />Links
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Image">
            <input type="radio" name="fl_radio" value=".f-image" />Image
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Gallery">
            <input type="radio" name="fl_radio" value=".f-gallery" />Gallery
          </label>
        </div>
        <div class="btn-group">
          <label data-text="Content">
            <input type="radio" name="fl_radio" value=".f-content" />Content
          </label>
        </div>
        
      </div>
    </div>

    <!-- portfolio items -->
    <div class="box-items">	

      <div class="box-col f-gallery">
        <div class="box-item">
          <div class="image">
            <a href="#gallery-1" class="has-popup-gallery">
              <img src="{{ Vite::asset('resources/images/cv/works/work1.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-images"></i>
                  </span>
                </span>
              </span>
            </a>
            <div id="gallery-1" class="mfp-hide">
              <a href="{{ Vite::asset('resources/images/cv/works/work1.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}"></a>
            </div>
          </div>
          <div class="desc">
            <div class="category">Gallery</div>
            <a href="#gallery-1" class="name has-popup-gallery">Alabaster Complete Collection</a>
          </div>
        </div>
      </div>

      <div class="box-col f-video">
        <div class="box-item">
          <div class="image">
            <a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video">
              <img src="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-video"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Video</div>
            <a href="https://youtu.be/S4L8T2kFFck" class="name has-popup-video">Book of John Paper</a>
          </div>
        </div>
      </div>

      <div class="box-col f-image">
        <div class="box-item">
          <div class="image">
            <a href="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" class="has-popup-image">
              <img src="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-image"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Image</div>
            <a href="{{ Vite::asset('resources/images/cv/works/work7.jpg') }}" class="name has-popup-image">White Rose Photo</a>
          </div>
        </div>
      </div>

      <div class="box-col f-image">
        <div class="box-item">
          <div class="image">
            <a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" class="has-popup-image">
              <img src="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-image"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Image</div>
            <a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}" class="name has-popup-image">Honest Company</a>
          </div>
        </div>
      </div>

      <div class="box-col f-gallery">
        <div class="box-item">
          <div class="image">
            <a href="#gallery-2" class="has-popup-gallery">
              <img src="{{ Vite::asset('resources/images/cv/works/work5.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-images"></i>
                  </span>
                </span>
              </span>
            </a>
            <div id="gallery-2" class="mfp-hide">
              <a href="{{ Vite::asset('resources/images/cv/works/work5.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work2.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}"></a>
              <a href="{{ Vite::asset('resources/images/cv/works/work4.jpg') }}"></a>
            </div>
          </div>
          <div class="desc">
            <div class="category">Gallery</div>
            <a href="#gallery-2" class="name has-popup-gallery">Brown Short Dog</a>
          </div>
        </div>
      </div>

      <div class="box-col f-music">
        <div class="box-item">
          <div class="image">
            <a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="has-popup-music">
              <img src="{{ Vite::asset('resources/images/cv/works/work6.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-music"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Music</div>
            <a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="name has-popup-music">Brown Concrete Building</a>
          </div>
        </div>
      </div>

      <div class="box-col f-links">
        <div class="box-item">
          <div class="image">
            <a href="https://beshley.com/" class="has-popup-link" target="_blank">
              <img src="{{ Vite::asset('resources/images/cv/works/work3.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-link"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Links</div>
            <a href="https://beshley.com/" class="name has-popup-link">Black Car</a>
          </div>
        </div>
      </div>

      <div class="box-col f-content">
        <div class="box-item">
          <div class="image">
            <a href="#popup-1" class="has-popup-media">
              <img src="{{ Vite::asset('resources/images/cv/works/work8.jpg') }}" alt="" />
              <span class="info">
                <span class="centrize full-width">
                  <span class="vertical-center">
                    <i class="icon fas fa-plus"></i>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="desc">
            <div class="category">Content</div>
            <a href="#popup-1" class="name has-popup-media">Yellow and Blue Striped</a>
          </div>
          <div id="popup-1" class="popup-box mfp-fade mfp-hide">
            <div class="content">
              <div class="image">
                <img src="{{ Vite::asset('resources/images/cv/works/work8.jpg') }}" alt="">
              </div>
              <div class="desc">
                <div class="category">Content</div>
                <h4>Yellow and Blue Striped</h4>
                <p>
                  Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata 
                  suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                </p>
                <a href="#" class="btn">
                  <span class="animated-button"><span>View Project</span></span>
                  <i class="icon fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="clear"></div>
  </div>
</div>