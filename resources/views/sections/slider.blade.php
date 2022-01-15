 <!-- slider section -->
 <section class=" slider_section ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          @foreach ($sliders as $slider )
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="active">{{$loop->iteration}}</li>
          @endforeach
      </ol>
      <div class="carousel-inner">
          @foreach ($sliders as $slider )
        <div class="carousel-item
        @if ($loop->iteration==1)
            active
        @endif">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <div class="slider_detail-box">
                   <h1>
                    {{$slider->title}}
                   </h1>

                  <div class="btn-box">
                    <a href="" class="btn-1">
                        @lang('messages.book')
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <div class="slider_detail-box">
                  <h1>
                    Welcome <br>
                    to our <br>
                    car <br>
                    showroom
                  </h1>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Book Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <div class="slider_detail-box">
                  <h1>
                    Welcome <br>
                    to our <br>
                    car <br>
                    showroom
                  </h1>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Book Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <div class="slider_detail-box">
                  <h1>
                    Welcome <br>
                    to our <br>
                    car <br>
                    showroom
                  </h1>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Book Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <div class="slider_detail-box">
                  <h1>
                    Welcome <br>
                    to our <br>
                    car <br>
                    showroom
                  </h1>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Book Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>
