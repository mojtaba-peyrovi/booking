
    <div class="single-property mt-4">
        <div class="row">
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCHGHNApLV-wrLh0GikXnXRPbrVlEWzlV-dFK9ahhOUcRIg4pG" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-5">
                <span class="badge badge badge-warning" id="single-property-type">{{$property->type}}</span>
                <span id="single-property-title">{{ $property->title }}</span>
                <div id="single-property-subtitle"><i class="fas fa-map-marker"></i> {{ $property->kilometersToCenter }} Km to city center</div>
                <div id="single-property-about" class=" mt-2 ml-2">{{ $property->about }}</div>


            </div>
            <div class="col-md-3">
                <div id="single-property-title" class="text-center"> Indoor Facilities</div>
                <div id="single-property-badges">
                    <span><i class="fas fa-bath {{ $property->bathroom === 0 ? 'badge-grey' : '' }}"></i></span>
                    <span><i class="fas fa-asterisk {{ $property->airCondition === 0 ? 'badge-grey' : '' }}"></i></span>
                    <span><i class="fas fa-wifi {{ $property->airCondition === 0 ? 'badge-grey' : '' }}"></i></span>
                    <span><i class="fab fa-algolia {{ $property->washingMachine === 0 ? 'badge-grey' : '' }}"></i></span>
                </div>
                <div id="single-property-title" class="mt-2 text-center"> Outoor Facilities</div>
                <div id="single-property-badges">
                    <span><i class="fas fa-bath"></i></span>
                    <span><i class="fas fa-bath"></i></span>
                    <span><i class="fas fa-bath"></i></span>
                    <span><i class="fas fa-bath"></i></span>
                </div>
                <button type="button" name="button" class="btn btn-primary mt-2">Show location</button>
            </div>
        </div>
    </div>
