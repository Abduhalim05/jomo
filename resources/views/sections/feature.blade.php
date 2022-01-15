
  <!-- feature section -->

  <section class="feature_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            @lang('messages.featured_cars')
        </h2>
        <hr>
      </div>
      <div class="carousel-wrap layout_padding2 ">
        <div class="owl-carousel owl-one">
            @foreach ($featureds as $featured )
          <div class="item">
            <div class="content">
              <div class="number-box">
                {{$loop->iteration}}
              </div>
              <div class="top-content">
                <div class="img-box">
                  <img src="{{voyager::image($featured->image)}}" />
                </div>
                <div class="img-text">
                  <h6 class="price">
                    {{$featured->real_price}}
                  </h6>
                  <h6>
                    {{$featured->promo_price}}
                  </h6>
                </div>
              </div>
              <div class="bottom-content">
                <h5>
                    {{$featured->title}}
                </h5>
                <p>
                  {{$featured->description}}
                </p>
              </div>
            </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>

  </section>

  <!-- feature section -->
