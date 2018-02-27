@extends('layouts.master')
@section('title')
  | ({{ $count }}) Hotels Worldwide
@endsection
@section('stylesheet')
    <!-- Custom styles for this template -->
  <link href="{{ url('css/initial.css') }}" rel="stylesheet">
    <!-- Home custom css -->
<link href="{{ url('css/main_style.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('partials.home_header')

    @include('partials.home_featured')

    @include('partials.home_subscription')
    <div class="apartments py-3">
    <div class="container">
        <p id="apartments-title">More than just hotels… discover pure comfort with homes & apartments</p>
    <div class="row">
        @foreach ($properties as $property)
            @include('partials.home_apartment_card')
        @endforeach


    </div>
        <div class="row">
            <section class="acommodation-types">
            <div class="container">
                <p id="acommodation-types-title">Whatever accommodation you’re looking for, we’ve got it…</p>
                <div class="col-md-2">
                    <img src="http://media.equityapartments.com/images/c_crop,x_0,y_0,w_1920,h_1080/c_fill,w_1920,h_1080/q_80/4147-23/the-hesby-apartments-exterior.jpg" class="acommodation-types-photo">
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
$(function () {
             $('#datetimepicker1').datetimepicker();
         });
</script>
@endsection
