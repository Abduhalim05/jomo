<ul class="navbar-nav  ">
    <li class="nav-item @if(request()->path()=='/') active @endif">
      <a class="nav-link" href="{{ route('home')}}">@lang('messages.home')<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item @if(request()->path()=='about') active @endif ">
      <a class="nav-link" href="{{ route('about')}}">@lang('messages.about')</a>
    </li>
    <li class="nav-item @if(request()->path()=='cars') active @endif">
      <a class="nav-link" href="{{ route('cars')}}">@lang('messages.cars')</a>
    </li>
    <li class="nav-item @if(request()->path()=='portfolio') active @endif">
      <a class="nav-link" href="{{ route('portfolio')}}">@lang('messages.portfolio')</a>
    </li>
    <li class="nav-item @if(request()->path()=='news') active @endif">
      <a class="nav-link" href="{{ route('news')}}">@lang('messages.news')</a>
    </li>
    <li class="nav-item @if(request()->path()=='contact') active @endif">
      <a class="nav-link" href="{{ route('contact')}}">@lang('messages.contact')</a>
    </li>
    {{-- <li class="nav-item @if(request()->path()=='slider.index') active @endif">
      <a class="nav-link" href="{{ route('slider.index')}}">(Sliders)</a>
    </li> --}}
    {{-- <li class="nav-item @if(request()->path()=='admin') active @endif">
      <a class="nav-link" href="{{ route('admin')}}">Admin</a>
    </li> --}}
  </ul>
