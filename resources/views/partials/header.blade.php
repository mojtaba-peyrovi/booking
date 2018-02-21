<header>
<div class="navbar navbar-dark bg-dark">
<div class="container d-flex justify-content-between">
  <a href="#" class="navbar-brand d-flex align-items-center">
    <img src="{{ URL::to('img/logo-main.png') }}" alt="" class="img-responsive logo-img">
  </a>
  <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="#" id="nav-price">THB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="nav-flag">flag</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="nav-refer">Refer friends and earn</a>
      </li>
      <li class="">
        <button type="button" name="" id="nav-list" >List your property</button>
      </li>
      <li class="">
        <button type="button" href="#" id="nav-register">Register</button>
      </li>
      <li class="nav-item">
        <button type="button" href="#" id="nav-signin">Sign in</button>
      </li>
  </ul>
</div>
</div>
<div class="navbar box-shadow" id="nav-second">
  <div class="container">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link active" href="#">Accommodation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Flights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trains</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Car Rentals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Airport Taxis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Restaurants</a>
      </li>
    </ul>
  </div>
</div>
</header>
<section class="searcher">
<div class="container">
  <h4>Find deals for any season</h4>
  <div id="searcher-sub-title">From cosy country homes to funky city flats</div>
  <form class="search-form bg-warning mt-3">

    <div class="row">
      <div class="col-md-6">
        <span>Destination property name or address:</span>
        <input type="text" name="" value="" class="form-control">
        <div class="row mt-3">
          <div class="col-md-4">
            <input type="text" name="" value="" class="form-control">
          </div>
          <div class="col-md-4">
            <input type="text" name="" value="" class="form-control">
          </div>
          <div class="col-md-4">
            <input type="text" name="" value="" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <span>Check-in</span>
            <input type="text" name="" value="" class="form-control">
          </div>
          <div class="col-md-6">
            <span>Check-out</span>
            <input type="text" name="" value="" class="form-control">
          </div>
        </div> <!-- end of row -->
        <div class="form-check form-check-inline mt-4">
          <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1"><span>Im travelling for work <i class="fas fa-question-circle"></i></span></label>
        </div>

      </div>
    </div> <!-- end of row -->
  </form>

</section>
