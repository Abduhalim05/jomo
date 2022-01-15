
  <!-- special section -->
  <section class="special_section">
    <div class="container">
      <div class="row">
          @foreach ($statistics as $statistic )
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="{{voyager::image($statistic->image)}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                {{$statistic->title}}
              </h5>
              <h5 class="price">
                {{$statistic->price}}
              </h5>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- end special section -->
