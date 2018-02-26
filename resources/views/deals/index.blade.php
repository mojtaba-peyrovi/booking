@extends('layouts.master')
@section('title')
    | deals
@endsection
@section('stylesheet')
    <!-- custom css -->
<link href="{{ url('css/main_style.css') }}" rel="stylesheet">
<link href="{{ url('css/deals.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="side-searcher mt-3 pb-4">
                        <div class="side-searcher-content mx-4 pt-4">
                            <div class="side-searcher-title">Search</div>
                           <span class="side-searcher-subtitle">Destination property name or address:</span>
                           <input type="text" name="" value="" class="form-control">
                           <span class="side-searcher-subtitle">Check-in date</span>
                           <div class="bfh-datepicker" style="background-color:white;"></div>
                           <span class="side-searcher-subtitle">Check-out date</span>
                           <div class="bfh-datepicker" style="background-color:white;"></div>
                           <span class="side-searcher-subtitle">1 night stay</span>
                           <input type="text" name="" value="" class="form-control">
                           <div class="row mt-2">
                               <div class="col-md-6">
                                    <input type="text" name="" value="" class="form-control">
                               </div>
                               <div class="col-md-6">
                                    <input type="text" name="" value="" class="form-control">
                               </div>
                           </div>
                           <div class="container mt-3">
                               <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                               <label class="form-check-label" for="inlineRadio1"><span>Im travelling for work <i class="fas fa-question-circle"></i></span></label>

                           </div>
                           <input type="submit" name="" value="Search" class="btn btn-primary float-right ">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="mt-3" id="deals-title">All deals available at booking.com</div>
                <hr>

                @foreach ($deals as $deal)
                        @include('partials.single_deal')
                @endforeach
                {{ $deals->links() }}
            </div>

        </div>


    </div>



@endsection
