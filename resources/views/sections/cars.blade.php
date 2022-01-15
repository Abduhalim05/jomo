 <!-- car section -->
 <section class="car_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            @lang('messages.our_cars')
        </h2>
        <hr>
      </div>
      <div class="layout_padding">
        <div class="row">
            @foreach ($cars as $car )
          <div class="col-md-6 c-{{$loop->iteration}}">
                <div class="img-box">
                <img src="{{voyager::image($car->image)}}" alt="">
                </div>
                <div class="detail-box">
                <div class="btn-box">
                    <a href="">
                        @lang('messages.book')
                    </a>
                </div>
                <div class="detail_text">
                    <div class="name">
                    <h4>
                        {{$car->name}}
                    </h4>
                    </div>
                    <div class="price">
                    <h4>
                        <span>
                        $
                        </span>
                        {{$car->price}}
                    </h4>
                    </div>
                </div>
                </div>
          </div>
          @endforeach
        </div>
      </div>
      @if (request()->path()!='cars')
        <div class="d-flex justify-content-center">
          <a href="/cars" class="see_more-btn">
            @lang('messages.see_more')
          </a>
        </div>
        @endif
    </div>
  </section>

  <!-- end car section -->
