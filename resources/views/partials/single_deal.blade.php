<div class="single-deal">
    <div class="row mt-2">
        <div class="col-md-3 ml-2">
            <img src="https://q-ak.bstatic.com/xdata/images/hotel/square200/94841340.jpg?k=381a8beff2b08d8282e566c52667f11705f34be9826e34f8a274c05eac3a212f&o=" class="img-fluid">
        </div>
        <div class="col-md-8" id="single-deal-main">
                <span class="single-deal-title">{{ $deal->property->title }}</span>

                    <div class="btn-group float-right ml-1" id="single-deal-reviews" >
                      <span class="">
                          <div class="deal-class">Superb</div>
                          <div class="deal-reviews">234 reviews</div>
                      </span>
                      <button type="button" class="deal-btn mr-2 px-2">9.3</button>
                    </div>
                <div class="single-deal-address">
                    <span id="single-deal-city"><i class="fas fa-map-marker-alt"></i><a href="#">{{ $deal->property->country }}, {{ $deal->property->city }}</a></span>
                    <span id="single-deal-city-center"><i class="fas fa-map-signs"></i>({{ $deal->property->kilometersToCenter }} km from center)</span>
                </div>
                <div class="who-is-booking">
                    1 person is looking right now
                </div>
                <div class="single-deal-credit" {{ ($deal->property->creditCardNeeded == 0) ? 'hidden':'' }}>
                    <i class="far fa-credit-card"></i>
                    Reservation possible without a credit card
                </div>
                <div class="single-deal-demand">
                    <span class="badge badge-danger">In high demand</span>
                    Booked 34 times in the last 24 hours
                </div>
                <div class="great-value">
                    <span class="badge badge-warning">Great Value Today</span>
                    <span><i class="fas fa-bus"></i></span>
                    <span><i class="fas fa-utensils"></i></span>
                    <span><i class="fas fa-wifi"></i></span>
                </div>
                <div style="padding-left: 20px;">
                    <span class="bed-type">Double Room </span><span><i class="fas fa-bed"></i></span>

                </div>
                <span class="single-deal-price float-right" style="margin-right:20px;">
                    <div class="price float-right">THB {{ $deal->price }}</div><br>
                    <div class="breakfast float-right"{{ ($deal->breakfast == 0) ? 'hidden':'' }}>Breakfast Included</div><br>
                    <div class="cancellation float-right" {{ ($deal->freeCancellation == 0) ? 'hidden':'' }}>Free cancellation</div><br>
                </span>


        </div>
    </div>
</div>
