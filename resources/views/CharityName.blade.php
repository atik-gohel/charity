@extends('master') @section('content')

<section id="hero-more-d">
    <div class="px-4 pt-0 pb-4 cover">
        <div class="media align-items-end profile-head   ">
            <div class="profile mr-3">
                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                <!-- <a href="#" class=""  >Edit profile</a> -->
                <!-- <button type="button" class="btn btn-outline-dark btn-sm btn-block  btn-edit-profile-con" data-toggle="modal" data-target="#myModal">Edit profile</button> -->

            </div>

            <div class="media-body mb-5 text-white">
                <h4 class="mt-0 mb-0">{{$charityuserdata[0]->contributer_charityname}}</h4>
                <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>{{$charityuserdata[0]->contributer_city}}</p>
            </div>
        </div>
        <div class=" d-sm-flex justify-content-end  text-center alleventbtn   d-none ">
            <a href="#" class="text-decoration-none   ">
                <span></span>
                <span></span>
                <span></span>
                <span></span> Donate Now
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-4 bg-light ">
            <div class="col-md-12  d-flex  justify-content-sm-start justify-content-center text-center">
                <!-- <ul class="list-inline  ">
                <li class="list-inline-item">
                    <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                </li>
                <li class="list-inline-item">
                    <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                </li>
                <li class="list-inline-item">
                    <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                </li>
            </ul> -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark btn-sm btn-block  btn-edit-profile-con" data-toggle="modal" data-target="#exampleModalCenter">
        Edit Profile
        </button>  <button type="button" class="btn btn-outline-dark btn-sm btn-block ml-3  btn-edit-profile-con" >
        <a href="{{ url('/logout') }}">  <i class="fa fa-sign-out logout-u "></i> </a>
        </button>       

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                            </div>
                            <div class="modal-body">




                                <form class="form-horizontal" role="form" metho="POST" action="fileupload">
                                    @csrf
                                    <div class="text-center">
                                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                        <h6>Upload a different photo...</h6>
                                        <input type="file" class="form-control " name="file" style="width:auto; border:none">
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: First name ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="Jane">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Last name ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="Bishop">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Charity Name ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Email ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Phone Number ::</label>
                                        <div class="">
                                            <div class="">
                                                <input class="form-control" type="number" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: City ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Address ::</label>
                                        <div class="">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Detail ::</label>
                                        <div class="">
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">:: Password ::</label>
                                        <div class="">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>

                            </div>
                            <!-- <div class="modal-footer">

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center alleventbtn-2 d-sm-none">
                <a href="#" class="text-decoration-none ">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> Donate Now
                </a>
            </div>

        </div>
    </div>
</section>




<section id="c-n-t" class="c-n-t">

    <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
            <h2>Over Service</h2>
            <p></p>
        </div>
        <div class="row">

            <div class="col-lg-5 col-md-6">
                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                    <img src="https://source.unsplash.com/385x552/?me" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                    <h2>What We Do</h2>
                    <!-- <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <p>{{$charityuserdata[0]->contributer_detail}}</p>
                    <!-- <ul>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ======= Gallery Section =======
<section class="gallery-c-n">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Our Great Moment</p>
        </div>
        <div class="gallery" id="gallery">
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,care" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,studied" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,crew" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,event" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,instrument" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,practical" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,pass" alt=""></div>
            </div>

        </div>
    </div>
</section> -->
<!-- End Gallery Section -->

@endsection