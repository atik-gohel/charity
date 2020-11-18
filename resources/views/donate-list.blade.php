@extends('master')

@section('content')
 
<section class="location-f-d-l ">
    <div class="container ">
        <div class="row ">
            <div class="col-xs-12 ml-auto mr-auto">
                <form action="" method="" class="" >
                    <div class="form-row  form-row-1">
                        <div class="form-group form-group-1">
                            <i class="fa fa-map-marker fa-2x"></i>
                            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                            <button type="submit" class="btn btn-primary">Check Availability</button>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Check Availability</button>
                        </div>
                    </div>
                    <div class="form-row clearfix pl-2 pr-2 ">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="ml-auto">Need Help?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection