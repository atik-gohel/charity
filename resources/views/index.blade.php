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
                <div class="container ">
                    <div class="row  ">
                        <div class="col-md-6 ">
                            <h1 class="display-5">We Need Your Support</h1>
                            <p class="lead">Give Hand To Make The Better World</p>
                        </div>
                        <div class="col-md-6  img-box  d-none d-md-block ">
                            <img src="img/1.png" class="pic-1">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider One End -->
      
            <!-- Slider Two Start -->
            <div class="carousel-item slide-2">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-6">
                            <h1 class="display-5">Helping Grow Your Faith</h1>
                            <p class="lead">Submit Your Presence To The Creator Of The Universe</p>
                        </div>
                        <div class="col-md-6 img-box d-none d-md-block">
                            <img src="img/1.png" class="img-1 ">
                        </div>
                    </div>
                </div>
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
    <section class="wwd">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are doing</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card transition ">
                        <h2 class="transition">Save Pepole</h2>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                        <div class="card_circle transition"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card transition ">
                        <h2 class="transition">Save Humanity</h2>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                        <div class="card_circle transition"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card transition  ">
                        <h2 class="transition">Save World</h2>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                        <div class="card_circle transition"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section>
        <div class="container">

            <div class="btn-box">
                <button>featured</button>
                <button>Top Rated</button>
                <button>Newly Added</button>
            </div>
            
            <div class="row">
        
                <div class="w-grid">
                    <div class="wrapper">
                
                            <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">
                        
                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content">
                        <p >Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn">Donate Now</button>
                            <button type="button" class="btn">More Detail</button>                      
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" >
                    </div>
                    <div class="icons"><ul>
                        <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li> <a href="#"><span class="fa fa-instagram"></span></a></li></ul>
                    </div>
                </div>

                <div class="w-grid">
                    <div class="wrapper">
                
                            <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">
                        
                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content">
                        <p >Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn">Donate Now</button>
                            <button type="button" class="btn">More Detail</button>                      
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" >
                    </div>
                    <div class="icons"><ul>
                        <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li> <a href="#"><span class="fa fa-instagram"></span></a></li></ul>
                    </div>
                </div>

                <div class="w-grid">
                    <div class="wrapper">
                
                            <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">
                        
                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content">
                        <p >Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn">Donate Now</button>
                            <button type="button" class="btn">More Detail</button>                      
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" >
                    </div>
                    <div class="icons"><ul>
                        <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li> <a href="#"><span class="fa fa-instagram"></span></a></li></ul>
                    </div>
                </div>

                <div class="w-grid">
                    <div class="wrapper">
                
                            <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">
                        
                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content">
                        <p >Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn">Donate Now</button>
                            <button type="button" class="btn">More Detail</button>                      
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" >
                    </div>
                    <div class="icons"><ul>
                        <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li> <a href="#"><span class="fa fa-instagram"></span></a></li></ul>
                    </div>
                </div>

                <div class="w-grid">
                    <div class="wrapper">
                
                            <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">
                        
                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p >Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn">Donate Now</button>
                            <button type="button" class="btn">More Detail</button>                      
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" >
                    </div>
                    <div class="icons"><ul>
                        <li> <a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li> <a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li> <a href="#"><span class="fa fa-instagram"></span></a></li></ul>
                    </div>
                </div>

            </div>
        </div>  
    </section>
        
     
        

@endsection
