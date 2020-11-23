@extends('master') @section('content')

<section class="location-f-d-l  ">
    <div class="container ">
        <div class="row  ">
            <div class="col-xs-12 col-md-5 col-10 ml-auto mr-auto  ">
                <form class="form-row-1 ">
                    <div class="title    d-flex justify-content-center ">
                        Find Here


                    </div>
                    <hr class="section-break-1" />
                    <div class="form-row d-flex justify-content-center ml-auto mr-auto">

                        <div class="location-box mx-2">
                            <label class="sr-only" for="inlineFormInputGroup">location</label>
                            <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="location">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn  "><img src="img/next.svg"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<section class="donate-list-grid">
    <div class="container">


        <div class="row mr-0 ml-0">

            <!-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div> -->

        

            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>


            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?charity" class="iggrid" onclick="myFunction()">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donation" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>


            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?charity" class="iggrid" onclick="myFunction()">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>


            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?kind" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donate" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?poor" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donations" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>


            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?kind" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donate" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>




            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?poor" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>



            <div class="col-xl-3 col-md-4 mr  col-sm-6  mb-4" data-category="1">
                <div class="w-grid ">
                    <div class="wrapper ">

                        <img src="https://source.unsplash.com/featured/?Donations" id="iggrid">

                        <div class="title-grid">Chail donation</div>
                        <div class="place-grid">Junagadh, Gujarat</div>
                    </div>
                    <div class="content-1">
                        <p>Lorem ipsum dolor cupiditate, <br>asperiores aut.</p>
                        <div>
                            <button type="button" class="btn-1">Donate Now</button>
                            <button type="button" class="btn-1 mt-1">More Detail</button>
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
            </div>

        </div>

    </div>
</section>

@endsection