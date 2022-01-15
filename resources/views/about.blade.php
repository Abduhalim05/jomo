@extends('layouts.site')
@section('title')
    About Page
@endsection
@section('content')
</div>
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
        <h5>
            {{$abouts->description}}
        </h5>
      </p>
    </div>
    <div>
        <p>
            <h6>
                {{$abouts->body}}
            </h6>
        </p>
    </div>

  </div>
</section>
<!-- end about section -->
@endsection
