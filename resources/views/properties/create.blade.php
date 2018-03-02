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
<h3 class="h4"><i class="fas fa-plus"></i> Add A Property</h3>
</div>


  <form method="post" action="{{route('properties.index')}}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6">
        <fieldset class="form-group">
          <label for="title">Property Title: </label>
          <input type="text" class="form-control" id="title" name='title'>
          <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>

              <fieldset class="form-group">
                <label for="type">Property Type: </label>
                <select class="form-control selectpicker" name="type" id="type">
                  <option disabled selected value> -- select an option -- </option>
                  <option value="hotel">Hotel</option>
                  <option value="resort">Resort</option>
                  <option value="villa">Villa</option>
                  <option value="apartment">Apartment</option>
                  <option value="townhouse">Townhouse</option>
                  <option value="condominium">Condominium</option>
                </select>
              </fieldset>

        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="country">Country: </label>
              <input type="text" class="form-control" id="country" name="country">
              <small class="text-muted">Select a coutry</small>
            </fieldset>
          </div>
          <div class="col-md-6">
                <label for="city">City: </label>
                <input type="text" class="form-control" id="city" name="city">
                <small class="text-muted">Put the city name here</small>
          </div>
        </div>

        <fieldset class="form-group">
          <label for="about">About this Property:</label>
          <textarea class="form-control" id="about" name="about" rows="3"></textarea>
        </fieldset>

        <div class="row">
          <div class="col-md-3">
            <fieldset class="form-group">
              <label for="rooms">Rooms: </label>
              <input type="number" class="form-control" id="rooms" name="rooms">
              <small class="text-muted">How many rooms?</small>
            </fieldset>
          </div>
          <div class="col-md-9 mt-5">
              <div class="row">
                <input type="hidden" name="creditCardNeeded" value="0">
                <input name="creditCardNeeded" type="checkbox" value="1">
                <label for="creditCardNeeded" class="ml-2"> Is credit card needed for this property?</label>
              </div>
          </div>
        </div>

      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <div class="text-center mb-2">Badge One</div><select class="form-control selectpicker" name="badge1" id="type">
                <option disabled selected value> -- select an option -- </option>
                <option value="Free Wifi">Free Wifi</option>
                <option value="Washing Machine">Washing Machine</option>
                <option value="Fitness">Fitness</option>
                <option value="Air Conditioner">Air Conditioner</option>
                <option value="TV">TV</option>
                <option value="Smoking Room">Smoking Room</option>
              </select>
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <div class="text-center mb-2">Badge Two</div><select class="form-control selectpicker" name="badge2" id="type">
                <option disabled selected value> -- select an option -- </option>
                <option value="Free Wifi">Free Wifi</option>
                <option value="Washing Machine">Washing Machine</option>
                <option value="Fitness">Fitness</option>
                <option value="Air Conditioner">Air Conditioner</option>
                <option value="TV">TV</option>
                <option value="Smoking Room">Smoking Room</option>
              </select>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <div class="text-center">Badge Three</div><select class="form-control selectpicker" name="badge3" id="type">
                <option disabled selected value> -- select an option -- </option>
                <option value="Free Wifi">Free Wifi</option>
                <option value="Washing Machine">Washing Machine</option>
                <option value="Fitness">Fitness</option>
                <option value="Air Conditioner">Air Conditioner</option>
                <option value="TV">TV</option>
                <option value="Smoking Room">Smoking Room</option>
              </select>
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <div class="text-center">Badge Four</div><select class="form-control selectpicker" name="badge4" id="type">
                <option disabled selected value> -- select an option -- </option>
                <option value="Free Wifi">Free Wifi</option>
                <option value="Washing Machine">Washing Machine</option>
                <option value="Fitness">Fitness</option>
                <option value="Air Conditioner">Air Conditioner</option>
                <option value="TV">TV</option>
                <option value="Smoking Room">Smoking Room</option>
              </select>
            </fieldset>
          </div>
        </div>
        <hr>
        <div>Additional Options:</div>
        <div class="row">
          <div class="col-md-6">
            <div class="mt-3">
                <input type="hidden" name="parking" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="parking" value="1">
                <small>Free Parking</small>
            </div>
            <div class="mt-3">
                <input type="hidden" name="balcony" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="balcony" value="1">
                <small>Balcony</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mt-3">
                <input type="hidden" name="bathroom" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="bathroom" value="1">
                <small>Bathroom</small>
            </div>
            <div class="mt-3">
                <input type="hidden" name="shuttle" value="0">
                <input type="checkbox" aria-label="Checkbox for following text input" name="shuttle" value="1">
                <small>Shuttle Bus</small>
            </div>
          </div>
        </div>
        <hr>

          <label >Featured Photo:</label>


        <div class="property-featured-photo">

          <input type='file' onchange="readURL(this);"/>
          <div><small>At least 300x250 px</small></div>
          <img id="property-featured-photo" src="#" alt="your image" hidden/>

        </div>


      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>




    <!-- Example split danger button -->

  </form>




</main>
@endsection('backend_section')
@section('js')
  <script type="text/javascript">
  function readURL(input) {

     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
             $('#property-featured-photo')
                 .attr('src', e.target.result)
                 .width(300)
                 .height(auto);

         };
         $('#property-featured-photo').attr("hidden",false);
         reader.readAsDataURL(input.files[0]);

     }

 }

  </script>

@endsection
