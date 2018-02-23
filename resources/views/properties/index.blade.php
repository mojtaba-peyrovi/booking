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
                <span><a href="{{ route('properties.index') }}">Properties</a></span>
            </div>

            <div class="properties_title">
                <h2>Properties</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <hr>
            <div class="row properties_main">
                <div class="col-md-3 mt-4" id="properties_filters">
                    <h3 class="text-center mb-3">Filters</h3>
                    <ul>
                        <li>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                              <label class="form-check-label float-right" for="exampleRadios1">Default radio</label>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    @foreach ($properties as $property)
                        @include('partials.single_property')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script type="text/javascript">
    var ref = $('#button');
    var popup = $('#popup');
    popup.hide();
    ref.hover(function(){
        popup.show();
        var popper = new Popper(ref,popup,{
            placement: 'top'
        });
        setTimeout(function(){
            popup.remove();
        },2000);
    });
    var badge = $('#badge');
    badge.hover(function(){
        badge.addClass('badge-red');
    });


    </script>

@endsection
