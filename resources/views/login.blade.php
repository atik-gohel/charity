<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{ asset('js/javascript.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <section class="login_user-page-header">
        <!-- Navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container">
                    <!-- Navbar Brand -->
                    <a class="navbar-brand" href="/" target="_blank">	
                            <h3 class="logo-cw" style="color:  #000;
	font: normal 28px 'Cookie', cursive;
	margin: 0;">Charity<span style="color:  #ee5057;">Site</span></h3></a>
                </div>
            </nav>
        </header>
    </section>

    <section class="login_user-page">
        <div class="container">
            <div class="row mt-5 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0" style="padding-bottom:50px">
                    <img src="img\undraw_Login_re_4vu2.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                    <h1>Welcome Back !!</h1>
                </div>

                <!-- Registeration Form -->
                <div class="col-md-7 col-lg-6 ml-auto">
                    <h1 class="text-center mb-3 pb-3">Login</h1>
                    <form action="#">
                        <div class="row">


                            <!-- Email Address -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope "></i>
                                </span>
                                </div>
                                <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                            </div>


                            <!-- Password -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock "></i>
                                </span>
                                </div>
                                <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                            </div>


                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0 ">
                                <a href="#" class="btn btn-primary btn-block py-2 btn-acc-cre">
                                    <span class="font-weight-bold">Login</span>
                                </a>
                            </div>

                            <!-- Divider Text -->
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                <div class="border-bottom w-100 ml-5"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                                <div class="border-bottom w-100 mr-5"></div>
                            </div>

                            <!-- Social Login -->
                            <div class="form-group col-lg-12  text-center ">

                                <a href="#" class="btn  px-3 facebook-icon-sign">
                                    <i class="fa fa-facebook-f "></i>

                                </a>
                                <a href="#" class="btn    px-3 google-icon-sign">
                                    <i class="fa fa-google "></i>
                                </a>
                            </div>

                            <!-- Already Registered -->
                            <div class="text-center w-100">
                                <p class="text-muted font-weight-bold">New User?<a href="signup-user" class="text-primary ml-2">Sign up</a></p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="js/javascript.js"></script>




</body>

</html>