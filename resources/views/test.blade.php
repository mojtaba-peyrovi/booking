@extends('layouts.master')
@section('title')
  | {{ $deal->property->title }}
@endsection
@section('stylesheet')
    <!-- Custom styles for this template -->
  <link href="{{ url('css/initial.css') }}" rel="stylesheet">
    <!-- Home custom css -->
<link href="{{ url('css/main_show_deal_style.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="container">
    <section class="navigator">
      <span><a href="{{ route('home') }}">Home</a> ></span>
      <span>
        <div class="">
          <a href="{{ route('properties.index') }}">{{ $deal->property->country }}</a> >
        </div>
        <div>
          {{ $count }}
        </div>
      </span>
      <span><a href="#">{{$deal->property->city }}</a> ></span>
      <span class="deal_show_property_name">{{ $deal->property->title }}</span>
    </section>
  </div>
@endsection
