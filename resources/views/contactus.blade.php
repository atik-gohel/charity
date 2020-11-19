@extends('master') @section('content')

<section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg">
        <div class="container py-5">
            <h2>Contact Us</h2>
            <p><a href="/">Home</a> &nbsp; / &nbsp; Contact</p>
        </div>
    </div>
</section>
<section class="w3l-contact-2 py-5" id="contact">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids row ">
                <div class="contact-left col-md-6">
                    <h4>Leave us a Message</h4>
                    <h6>For more info or inquiry about our products project, and pricing please feel free to get in touch with us.
                    </h6>
                    <div class="hours">
                        <h6 class="info mt-3">Email:</h6>
                        <p> <a href="muhammadatik143@gmail.com">
                            muhammadatik143@gmail.com</a></p>
                        <h6 class="info mt-3">Address:</h6>
                        <p> skyolean office, #401 block, Motibag Road,<br> Junagadh, Gujarat, India.</p>
                        <h6 class="info mt-3">Contact:</h6>
                        <p class="margin-top"><a href="tel:+(7043617802)">+91 7043617802</a></p>
                    </div>
                </div>
                <div class="contact-right ml-auto col-md-6">
                    <form action="" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input">
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <button class="btn btn-secondary btn-theme2 submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="">
    <div class="contact-top">

        <!-- map -->
        <div class="map map mt-md-0 mt-5">
            
        </div>
        <!-- //map -->
    </div>
</section>

@endsection