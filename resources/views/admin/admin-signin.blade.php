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
            <div class="col-md-4 offset-md-4">
                <div class="text-center">
                    <h2 class="mt-5">Admin Sign In</h2>
                    <small class="text-muted lead">You are not the admin? click <a href="{{ route('home') }}">Here</a></small>
                </div>

                <form method="post" action="{{ route('admin.signin') }}" class="mt-5">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Your Password:</label>
                        <input type="password" name="password" value="" class="form-control" required>
                    </div>
                    <button type="submit" name="button" class="btn btn-primary">Signup</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection
