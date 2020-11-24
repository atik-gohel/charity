@extends('master')

@section('content')

<!-- Slider Start -->
<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner ">
        <!-- Slider One Start -->
        <div class="carousel-item active slide-1">
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch  pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                            <div>
                                <h1>Here We Are For You</h1>
                                <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
                                <!-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                                    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                            <img src="https://source.unsplash.com/featured/?fun" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Slider One End -->

        <!-- Slider Two Start -->
        <div class="carousel-item slide-2">
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                            <div>
                                <h1>Here We Are For You</h1>
                                <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
                                <!-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                                    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                            <img src="https://source.unsplash.com/featured/?fun" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Slider Two End -->


        <!-- Slider three Start -->
        <div class="carousel-item slide-3">
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                            <div>
                                <h1>Here We Are For You</h1>
                                <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
                                <!-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                                    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                            <img src="https://source.unsplash.com/featured/?fun" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Slider Two End -->
    </div>
    <!-- Slider End -->


    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Slider End -->


<!-- what we do -->

<section id="services" class="services section-bg py-5">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>What We Do</h2>
            <p>Check out the great services we offer</p>
        </div>
        <div class="row wwdp justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card-1 transition ">
                    <h2 class="transition">Save Pepole</h2>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                    <div class="card_circle transition"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="card-1 transition ">
                    <h2 class="transition">Save Humanity</h2>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                    <div class="card_circle transition"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="card-1 transition  ">
                    <h2 class="transition">Save World</h2>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                    <div class="card_circle transition"></div>
                </div>
            </div>

        </div>
</section>


<section class="section-grid">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Best Site</h2>
            <p>Check out Now</p>
        </div>

        <div class="row cg">
            <div class="col-md-12 text-center">
                <ul id="filter-list">
                    <li class="filter active">Featured</li>
                    <li class="filter">Top Rated</li>
                    <li class="filter">Newly Added</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" id=filter-itme>

        @foreach($charityuserdata as $charityuserdata)
            <li class="col-lg-3 col-md-4  col-sm-6 col-12" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">

                        <div class="title-grid">{{$charityuserdata->contributer_charityname}}</div>
                        <div class="place-grid">{{$charityuserdata->contributer_city}}</div>
                    </div>
                    <div class="content-1">
                        <p class="mr-2 ml-2 text-truncate">{{$charityuserdata->contributer_detail}}</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <a href="{{url('CharityName',$charityuserdata->id)}}">  <button  type="button" class="btn-1 ">More Detail</button></a>
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value">
                    </div>
                    <div class="icons">
                        <ul>
                            <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li> <a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </li>

        @endforeach
         
        </div>
    </div>

</section>


    <!-- <section>
        <div class="banner-section">
            <div class="inner-container-1">
                <h1>Here To Help <span>You Every Need.</span></h1>
                {{-- <p class="text-1">
                    Here To Help <span>You Every Need.</span>
                </p> --}}
                <div class="  d-flex  logi-banner-btn">
                    <a href="#" class="text-decoration-none ">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Join Now
                    </a>
                </div> 
            </div>
        </div>
    </section> -->


  
    
    <section>
        <div class="home-newsletter" >
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
        

@endsection