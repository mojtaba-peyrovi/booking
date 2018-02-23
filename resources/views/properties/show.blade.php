@extends('layouts.master')
@section('title')
    | Properties
@endsection
@section('stylesheet')
    <!-- custom css -->
<link href="{{ url('css/main_style.css') }}" rel="stylesheet">
<link href="{{ url('css/properties.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="properties-list">
        <div class="container">
            <div class="navigator my-4">
                <span><a href="{{ Route('home') }}">Home</a> ></span>
                <span><a href="{{ route('properties.index') }}">Properties</a> ></span>
                <span class="" id="navigator-final">{{ $property->title }}</span>
            </div>
            <div class="" style="background-color:yellow; border: 1px solid grey;border-radius:10px;">
                {{ $property->title }}</br>
                {{ $property->country }}</br>
                {{ $property->city }}</br>
                {{ $property->type }}</br>
                {{ $property->about }}</br>
                {{ $property->rooms }}</br>
            </div>

        </div>
    </section>



@endsection
