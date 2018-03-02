@extends('layouts.backend')
@section('title')
    Admin Signup
@endsection
@section('stylesheet')
    <!-- custom css -->
<link href="{{ url('css/backend.css') }}" rel="stylesheet">
<link href="{{ url('css/backend_initial.css') }}" rel="stylesheet">
@endsection
@section('backend_content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div>
                    your name: {{ $admin->name }}
                </div>

                <div>
                    Your email: {{ $admin->email }}
                </div>
            </div>

        </div>
    </div>
@endsection
