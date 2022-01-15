 <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
            <h2>
            {{$abouts->title}}
            </h2>
        <hr>
      </div>
      <div>
        <p>
            <h6>
                {{$abouts->description}}
            </h6>
        </p>

      </div>
      <div>
        <a href="{{ route('about')}}">
            @lang('messages.read_more')
        </a>
      </div>
    </div>
  </section>


  <!-- end about section -->
