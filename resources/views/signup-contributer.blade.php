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

    <section class="sign_up_cont-page-header">

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

    <section class="sign_up_cont-page">
        <div class="container">
            <div class="row  mt-5 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 pb-5">
                    <img src="img\undraw_sign_in_e6hj.svg" alt="" class="img-fluid mb-3  d-none d-md-block">
                    <h1>Create an account as Contributer</h1>
                    <p class="font-italic text-muted">
                        <a href="signup-user" class="text-muted">
                            <u>Sign up as a User</u></a>
                    </p>
                </div>
                @if(session('success'))
            <h1>{{session('success')}}</h1>
            @endif
                <!-- Registeration Form -->
                <div class="col-md-7 col-lg-6 ml-auto">
                    <form id="regForm" action="/save_charity_data" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <div class="row">

                                <!-- First Name -->
                                <div class="input-group col-lg-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-user "></i>
                                        </span>
                                    </div>
                                    <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                                </div>

                                <!-- Last Name -->
                                <div class="input-group col-lg-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-user "></i>
                                        </span>
                                    </div>
                                    <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                                </div>

                                <!-- Email Address -->
                                <div class="input-group col-lg-12 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope "></i>
                                </span>
                                    </div>
                                    <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                                </div>

                                <!-- Phone Number -->
                                <div class="input-group col-lg-12 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-phone-square "></i>
                                        </span>
                                    </div>
                                    <!-- <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                        <option value="">+91</option>
                                    </select> -->
                                    <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                                </div>

                                <!-- Type -->
                                <div class="input-group col-lg-12 mb-4 ">
                                    <div class="input-group-prepend type-l-p">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-black-tie "></i>
                                        </span>
                                    </div>
                                    <select id="type" name="type"  class="form-control type-l-p custom-select bg-white border-left-0 border-md">
                                        <option value="Mony">Mony</option>
                                        <option value="clothes">clothes</option>
                                        <option value="Food">Food</option>
                                        <option value="child">child</option>
                                        <option value="Woman">Woman</option>
                                        </select>
                                </div>

                                <!-- Password -->
                                <div class="input-group col-lg-6 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock "></i>
                                </span>
                                    </div>
                                    <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                                </div>

                                <!-- Password Confirmation -->
                                <div class="input-group col-lg-6 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock "></i>
                                        </span>
                                    </div>
                                    <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>

                        </div>


                        <div class="tab">Contact Info:
                            <!-- City -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-building "></i>
                                    </span>
                                </div>
                                <input id="city" type="tel" name="city" placeholder="City" class="form-control bg-white border-md border-left-0 pl-3">

                            </div>


                            <!-- Address -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-map-marker "></i>
                                    </span>
                                </div>
                                <textarea id="add" name="address" rows="2" cols="50" placeholder="Address" class="form-control bg-white border-md border-left-0 pl-3" style="margin-top: 0px; margin-bottom: 0px; height: 107px;"></textarea>
                            </div>

                            <!-- Detail -->
                            <div class="input-group col-lg-12 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-info " ></i>
                                    </span>
                                </div>
                                <textarea id="detail" name="detail" rows="2" cols="50" placeholder="Ditail" class="form-control bg-white border-md border-left-0 pl-3"></textarea>
                            </div>
                        </div>


                        <!-- <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div> -->



                        <div style="overflow:auto;">

                            <!-- Social Login -->
                            <div class="form-group col-lg-12 mx-auto py-3 ">
                                <a href="#" class="btn  btn-block  btn-previous mt-0" id="prevBtn" onclick="nextPrev(-1)">
                                    <i class="fa fa-chevron-left mr-2"></i>
                                    <span class="font-weight-bold">Previous</span>
                                </a>
                               <a type="submit" class="btn  btn-block  btn-Next-sub mt-4" id="nextBtn" onclick="nextPrev(1)">
                                    <span class="font-weight-bold">Next</span>
                                </a><!--<input name="button" id="nextBtn" type="submit" value="submit" onclick="nextPrev(1)>  -->
                            </div>

                        </div>



                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:4px;">
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-3">
                                <div class="border-bottom w-100 ml-5"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                                <div class="border-bottom w-100 mr-5"></div>
                            </div>
  <!-- Already Registered -->
                            <div class="text-center w-100">
                                <p class="text-muted font-weight-bold">Already Registered? <a href="login" class="text-primary ml-2">Login</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>


    </section>






    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Create your account";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="js/javascript.js"></script>




</body>

</html>