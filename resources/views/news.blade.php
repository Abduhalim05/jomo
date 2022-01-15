@extends('layouts.site')

@section('title')
    News Page
@endsection

@section('content')
</div>
<!-- news section -->
<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          News
        </h2>
        <hr>
      </div>
      @foreach ($news as $new )
      <div>
        <h3 align="center">
            {{$new->title}}
        </h3>
        <p>
            {{$new->body}}
        </p>
      </div>
      @endforeach
      {{-- <div>
        <a href="">
          Read More
        </a>
      </div> --}}
    </div>
  </section>


  <!-- end news section -->

@endsection

