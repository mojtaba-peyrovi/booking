@extends('layouts.backend')
@section('stylesheet')
    <!-- Custom styles for this template -->
    <link href="{{ url('css/backend_initial.css') }}" rel="stylesheet">
    <!-- Home custom css -->
    <link href="{{ url('css/backend.css') }}" rel="stylesheet">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />


@endsection
@section('title')
  Dashboard({{ Auth::user()->name }})
@endsection

@include('partials.backend_sidebar')

@section('backend_content')
  <div class="col-md-10 offset-md-2 mt-4">
    <div class="row">
        <div class="col-md-10">
          <h2>Welcome to your Dashboard, {{ Auth::user()->name }}!</h2>
        </div>
        <div class="col-md-2">
          <span>Your Properties</span>
          <span class="badge badge-pill badge-warning">232</span>
          <span>Your Deals</span>
          <span class="badge badge-pill badge-danger text-right">34</span>
        </div>


    </div>

    <div class=" bg-info text-white mt-3">
      <div class="lead text-center text-uppercase py-2">Personal Info</div>
    </div>
    <table class="table mt-3">
      <tr>
        <td class="font-weight-bold pr-2">First Name:</td>
        <td Class="font-weight-lighter">{{ Auth::user()->name }}</td>
      </tr>
      <tr>
        <td class="font-weight-bold pr-2">Last Name:</td>
        <td Class="font-weight-lighter">Peyrovi</td>
      </tr>
      <tr>
        <td class="font-weight-bold pr-2">Email:</td>
        <td Class="font-weight-lighter">{{ Auth::user()->email }}</td>
      </tr>
    </table>
    <div class=" bg-info text-white">
      <div class="lead text-center text-uppercase py-2">History</div>
    </div>

  </div>






@endsection
