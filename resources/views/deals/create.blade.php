@extends('layouts.backend')
@section('stylesheet')
    <!-- Custom styles for this template -->
    <link href="{{ url('css/backend_initial.css') }}" rel="stylesheet">
    <!-- Home custom css -->
    <link href="{{ url('css/backend.css') }}" rel="stylesheet">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />


@endsection
@section('title')
  Dashboard,Booking.com
@endsection
@include('partials.backend_sidebar')
@section('backend_content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h3 class="h4"><i class="fas fa-plus"></i> Add A Deal</h3>
</div>


  <form method="post" action="{{route('deals.index')}}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6">
              <fieldset class="form-group">
                <label for="property_title">Property Title: </label>
                <select class="form-control selectpicker" name="property_title" id="property_title">
                  <option disabled selected value> -- select an option -- </option>

                  @foreach ($properties as $property)
                    <option value="{{ $property->title }}">{{ $property->title }}</option>
                  @endforeach

                </select>
              </fieldset>

          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="price">Price: </label>
              <input type="text" class="form-control" id="price" name="price">
              <small class="text-muted">price in THB</small>
            </fieldset>
          </div>
      </div>

      <div class="col-md-6">
        <div>Additional Options:</div>
        <div class="row">
          <div class="col-md-6">
            <div class="mt-3">
                <input type="hidden" name="breakfast" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="breakfast" value="1">
                <small>Breakfast</small>
            </div>
            <div class="mt-3">
                <input type="hidden" name="free cancellation" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="free cancellation" value="1">
                <small>Free cancellation</small>
            </div>

          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </form>
</main>
@endsection('backend_section')
