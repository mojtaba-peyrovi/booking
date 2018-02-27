@extends('layouts.master')
@section('title')
  | {{ $deal->property->title }}
@endsection
@section('stylesheet')
    <!-- Custom styles for this template -->
  <link href="{{ url('css/initial.css') }}" rel="stylesheet">
    <!-- Home custom css -->
<link href="{{ url('css/main_show_deal_style.css') }}" rel="stylesheet">
<link href="{{ url('css/main_style.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="container">

    <ul class="navigator my-3">
      <li>
        <a href="{{ route('home') }}">Home</a> >
        <div>
          -
        </div>
      </li>
      <li>
        <a href="{{ route('properties.index') }}">{{ $deal->property->country }}</a> >
        <div class="">
          {{ $country_count }} properties
        </div>
      </li>
      <li>
        <a href="#">{{$deal->property->city }}</a> >
        <div class="">
          {{ $city_count }} properties
        </div>
      </li>
      <li>
        <span id="deal-show-navigate-title">{{ $deal->property->title }}</span>
        <div>
          -
        </div>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="col-md-3" style="background-color:#e6f0ff;">
          <div class="reserve-btn">
            <button type="button" name="button"  class="btn btn-primary">Reserve</button>
          </div>
        </div>
        <div class="col-md-9" style="margin-left:-30px;">
          <ul class="deal-show-top-buttons" style="max-width:100%;">
            <li>Room info & price</li>
            <li>Facilities</li>
            <li>Property info</li>
            <li>The fine print</li>
            <li>Guest reviews(12,234)</li>
          </ul>

              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <span id="deal-show-title">{{ $deal->property->title }}</span>
                    <div class="deal-show-address">
                        <span id="map-marker"><i class="fas fa-map-marker-alt"></i></span>&nbsp<span id="deal-show-address">515 Ninth Avenue, Hell's Kitchen, New York, NY 10018, USA</span> - <a href="#" id="show-map-link">Great location - show map</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <a href="#" type="button" class="btn btn-primary">Reserve</a>
                  </div>
                </div>
            </div>
            <img src="https://cdn.hotelplanner.com/Common/Images/_HotelPlanner/Home-Page/fade/sld6.jpg" alt="" style="max-width:80%;margin-left:50px;">
        </div>
      </div>
    </div>


  </div>
@endsection
