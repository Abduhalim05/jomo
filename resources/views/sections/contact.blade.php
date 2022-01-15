  @if (Session::has('message'))
    <div class="alert alert-info">
        {{session('message')}}
    </div>

  @endif
  <!-- contact section -->
  <section class="contact_section @if(request()->path()=='contact') layout_padding-top @endif">
    <div class="container">
      <div class="heading_container">
        <h2>
            @lang('messages.contact')
        </h2>
        <hr>
      </div>
      <div class="layout_padding">
        <div class="row">
          <div class="col-md-6">
            <form action="/contact" method="POST">
                @csrf
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="@lang('messages.name')" name="name">
                  </div>
                  <div>
                    <input type="text" placeholder="@lang('messages.phone')" name="phoneNumber">
                  </div>
                  <div>
                    <input type="email" placeholder="@lang('messages.email')" name="email">
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="@lang('messages.message')" name="message">
                  </div>
                  <div class="mt-5 d-flex justify-content-center justify-content-sm-start">
                    <button type="submit" name="submit">
                        @lang('messages.send')
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="contact_img-box">
              <img src="images/car-service.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
