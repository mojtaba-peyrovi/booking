@extends('layouts.master')
@section('content')

    @include('partials.home_featured')

    @include('partials.home_subscription')
    <div class="apartments py-3">
    <div class="container">
        <p id="apartments-title">More than just hotels… discover pure comfort with homes & apartments</p>
    <div class="row">
        @include('partials.home_apartment_card')
        @include('partials.home_apartment_card')
        @include('partials.home_apartment_card')
        @include('partials.home_apartment_card')
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
