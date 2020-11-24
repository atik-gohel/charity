@extends('master') @section('content')



<section class="u-p-p">
<div class="container-fluid">

    <div class="row  ">
        <div class="col-md-3 col-sm-12 bg-c-lite-green user-profile  ">
            <div class="text-center text-white ">
                <div class="u-i-n"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                <h6 class="user-naem">{{$userdata[0]->user_fname}}&nbsp{{$userdata[0]->user_lname}}</h6>
                <a href="{{ url('/logout') }}">  <i class="fa fa-sign-out logout-u  "></i> </a>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 page-content  ">
            <div class="">
                <h3 class="info-u b-b-default">Information</h3>
                <div class="row e-p-u">
                    <div class="col-sm-6">
                        <h6 class="title-u">Email</h6>
                        <p class="text-muted text-break">{{$userdata[0]->user_email}}</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="title-u">Phone</h6>
                        <p class="text-muted ">{{$userdata[0]->user_number}}</p>
                    </div>
                </div>
                <h3 class="info-u b-b-default">Other</h3>
                <div class="row btn-u e-p-u">
                    <div class="col-sm-6 mt-3">
                        <a href="#" class="btn btn-outline-dark btn-sm Save-u">Saved <i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <a href="#" class="btn btn-outline-dark btn-sm Save-u">Recent Viewed</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
@endsection