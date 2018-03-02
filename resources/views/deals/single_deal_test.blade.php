<div class="single_deal box-shadow border mb-3 rounded box-shadow">

        <div class="row">
            <div class="col-lg-3 offset-lg-0 col-xs-6 offset-xs-3">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgtV8oTRrY7xmbH8C7sqldrF2-EjmQJfjAC7Ap060DD1YkduatCA" alt="" class="img-fluid rounded m-2">
            </div>
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-xs-6 offset-xs-3 m-2">
                <h1 class="text-primary font-weight-bold mb-2" style="font-size:14px;">{{ $deal->property['title'] }}</h1>
                <div class="" style="font-size:11px;">
                    <span><i class="fas fa-map-marker-alt"></i>
                        <a href="#">{{ $deal->property['country'] }}, {{ $deal->property['city'] }}</a>
                    </span>
                    <span><i class="fas fa-map-signs"></i>({{ $deal->property['kilometersToCenter'] }} km from center)</span>
                </div>
                <div style="font-size:11px;">Towering over the bay, this iconic hotel offers the world's largest rooftop infinity pool, 20 dining options and a world-class casino.</div>
                <div class="" style="font-size:11px;">
                    <span class="badge badge-danger">In high demand</span>
                    <span class="text-danger">Booked 12 times in the last 24 hours</span>
                </div>
                <div class="text-success" style="font-size:11px; font-weight:bold;" {{ ($deal->property['creditCardNeeded'] == 0) ? 'hidden':'' }}>
                    <span>
                        <i class="far fa-credit-card"></i>
                        Reservation possible without credit card
                    </span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 justify-content-between ml-md-auto">
                    <span style="font-size:14px;font-weight:bold;" class="mr-1">Fabulous</span><span class="badge badge-primary">4.4</span>
                    <div style="font-size:10px;">34,444 reviews</div>
                    <button type="button" class="btn btn-warning btn-sm text-white">Show Price</button>
            </div>
        </div>

</div>
