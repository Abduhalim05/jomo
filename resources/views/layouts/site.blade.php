<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset ('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset ('css/responsive.css') }}" rel="stylesheet" />
</head>

<body @if (request()->path()!='/') class="sub_page"  @endif >

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              @include('layouts.menu')
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            {{-- <div class="login_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Login
              </a>
            </div> --}}
        </div>
    </nav>
    <div>
        <a href="/lang/uz">Uzbek</a><br>
        <a href="/lang/ru">Russian</a><br>
        <a href="/lang/en">English</a><br>
    </div>
    <h3>Lang:{{\App::getLocale()}}</h3>
</div>
    </header>
    <!-- end header section -->


    @yield('content')


    <!-- info section -->
  <section class="info_section ">
    <div class="d-flex justify-content-center">
      <div class="social_container">
@foreach ($medias as $media )
        <div class="number-box">
          <a href="tel:{{$media->phone}}">
            <img src="images/phone.png" alt="">
            <h6>
                {{$media->phone}}
            </h6>
          </a>
        </div>

        <div class="mail-box">
          <a href="mailto:{{$media->email}}">

            <img src="images/mail.png" alt="">
            <h6>
                {{$media->email}}
            </h6>
          </a>
        </div>
        <div class="social-box">
          <div class="box">
            <a href="{{$media->facebook}}">
              <img src="images/facebook-logo.png" alt="">
            </a>
          </div>
          <div class="box">
            <a href="{{$media->twitter}}">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div class="box">
            <a href="{{$media->linkedin}}">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
          <div class="box">
            <a href="{{$media->instagram}}">
              <img src="images/instagram-logo.png" alt="">
            </a>
          </div>
        </div>
            @endforeach
      </div>
    </div>
    <div class="container layout_padding2 mobile_padding-top-none ">
      <div class="row">
        <div class="col-md-3">
          <h5>
            @lang('messages.contact_info')
          </h5>
          @foreach ($infos as $info )
          <p>
            {{$info->contact_info}}
          </p>
          @endforeach
        </div>
        <div class="col-md-3">
          <h5>
            @lang('messages.open_hours')
          </h5>
          {{-- <p>
            Monday 10:00 am to 08:00 pm <br>
            Sunday : Off <br>
            Monday 10:00 am to 08:00 pm <br>
            Monday 10:00 am to 08:00 pm <br>
            Monday 10:00 am to 08:00 pm
          </p> --}}
          <p>
            {{$info->open_hour}}
          </p>

        </div>
        <div class="col-md-3">
          <h5>

            @lang('messages.useful_link')
          </h5>
          <ul>
              @foreach ($links as $link )
            <li>
              <a href="{{$link->link}}">
                {{$link->link_name}}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
                @lang('messages.newsletter')
            </h5>
            <div class="form_container">
              <form action="/subscribe" method="POST">
                @csrf
                @method('POST')
                <input type="email" name="email" placeholder="@lang('messages.enter_email')"><br>
                <input type="Submit" class="btn btn-primary" value="@lang('messages.subscribe')">
                {{-- @empty($errors->any())
                    <div class="alert alert-primary">
                        success!
                    </div>
                @endempty --}}

                @error('email')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                 @enderror

                </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="getcurrentYear"></span> @lang('messages.rights')
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
