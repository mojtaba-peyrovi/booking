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
                <div class="text-center">
                    <h2 class="mt-5">Admin Signup</h2>
                </div>

                <form method="post" action="{{ route('admin.signup') }}" class="mt-5">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="firstName">Your First Name:</label>
                                    <input type="text" name="firstName" value="" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Your Last Name:</label>
                                    <input type="text" name="lastName" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Your Address:</label>
                                <input type="text" name="address" value="" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Your Gender:</label>
                                    <input type="text" name="gender" value="" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nationality">Your Nationality:</label>
                                    <input type="text" name="nationality" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday">Birthday:</label>
                                        <input type="date" name="birthday" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role:</label>
                                        <input type="text" name="role" value="" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Your Email:</label>
                                <input type="email" name="email" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Your Password:</label>
                                <input type="password" name="password" value="" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-primary btn-block">Signup</button>
                    {{ csrf_field() }}
                </form>

    </div>
@endsection
