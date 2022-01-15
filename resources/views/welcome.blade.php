{{-- @foreach ($sliders as $item )
    {{$item->title}} <br>
    {{$item->body}} <br>
@endforeach --}}
@extends('layouts.site')

    @section('title')
        Home Page
    @endsection

@section('content')
    @include('sections.slider');
    @include('sections.search');
    @include('sections.cars');
    @include('sections.about');
    @include('sections.feature');
    @include('sections.statistics');
    @include('sections.client');
    @include('sections.contact');

@endsection
