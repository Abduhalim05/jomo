
  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            @lang('messages.client_say')
        </h2>
        <hr>
      </div>
      <div class="layout_padding2">
        <div class="client-slick-slider slick-slider">
            @foreach ($messages as $message )


          <div class="slick-item">
            <div class="client-box">
              <div class="client-detail">
                <p>
                  {{$message->message}}
                </p>
              </div>
              <div class="client-info">
                <div class="img-box">
                  <img src="images/user-png.jpg" alt="">
                </div>
                <div class="name">
                  <h6>
                    {{$message->name}}
                  </h6>
                  <p>
                    Client
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="slick-item">
            <div class="client-box">
              <div class="client-detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client-info">
                <div class="img-box">
                  <img src="images/client-2.png" alt="">
                </div>
                <div class="name">
                  <h6>
                    slightly
                  </h6>
                  <p>
                    Client
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-box">
              <div class="client-detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client-info">
                <div class="img-box">
                  <img src="images/client-3.png" alt="">
                </div>
                <div class="name">
                  <h6>
                    Randomised
                  </h6>
                  <p>
                    Client
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-box">
              <div class="client-detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client-info">
                <div class="img-box">
                  <img src="images/client-4.png" alt="">
                </div>
                <div class="name">
                  <h6>
                    alteration
                  </h6>
                  <p>
                    Client
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="slick-item">
            <div class="client-box">
              <div class="client-detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client-info">
                <div class="img-box">
                  <img src="images/client-5.png" alt="">
                </div>
                <div class="name">
                  <h6>
                    variation
                  </h6>
                  <p>
                    Client
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
          </div>
           --}}
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->
