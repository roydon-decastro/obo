<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Office of the Building Official</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
  <!-- Bootstrap core CSS -->

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" ></script>

      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>

            body {
                
            }
            @media only screen and (min-width: 768px) 
            {
                .centerme {
                    position: absolute;
                    top:50%;
                    left:50%;
                    transform: translate(-50%,-50%);
                }
                .header {
                height:95vh;
                background: #1C2331;
                clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
                }

            }


            @media only screen and (max-width: 600px) {
            body {
                background-color: #1C2331;
            }
            }

            


        </style>
    </head>
    <body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="/images/ormlogo.png" width="50px" height="50px" alt="">
             </a>
             <a class="navbar-brand d-inline" href="#">
                            <img src="/images/calapanlogo2.png" width="50px" height="50px" alt="">
                        </a>

            <a class="navbar-brand" href="#">OrM-OBOSS</a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown multi-level-dropdown">
                    <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle w-100">Dropdown</a>
                    <ul class="dropdown-menu mt-2 rounded-0 primary-color border-0 z-depth-1">
                    <li class="dropdown-item dropdown-submenu p-0">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-white w-100">Click Me Too! </a>
                        <ul class="dropdown-menu ml-2 rounded-0 primary-color border-0 z-depth-1">
                        <li class="dropdown-item p-0">
                            <a href="#" class="text-white w-100">Hey</a>
                        </li>
                        <li class="dropdown-item p-0">
                            <a href="#" class="text-white w-100">Hi</a>
                        </li>
                        <li class="dropdown-item dropdown-submenu p-0">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-white w-100">Hello </a>
                            <ul class="dropdown-menu mr-2 rounded-0 primary-color border-0 z-depth-1 r-100 ">
                            <li class="dropdown-item p-0">
                                <a href="#" class="text-white w-100">Some</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a href="#" class="text-white w-100">Text</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    <li class="dropdown-item dropdown-submenu">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-white w-100">Click me </a>
                        <ul class="dropdown-menu mr-2 rounded-0  primary-color border-0 z-depth-1 r-100 ">
                        <li class="dropdown-item p-0">
                            <a href="#" class="text-white w-100">How</a>
                        </li>
                        <li class="dropdown-item p-0">
                            <a href="#" class="text-white w-100">are</a>
                        </li>
                        <li class="dropdown-item p-0">
                            <a href="#" class="text-white w-100">you </a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                </ul>
                <!-- Links -->
                @if (Route::has('login'))
                                                <div class="">
                                                @auth
                                                    <a href="{{ route('admins.index') }}" class=" nav-link text-white">Admin</a>
                                                @else
                                                    <a href="{{ route('login') }}" class=" nav-link text-white">Login</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }} " class=" nav-link text-white">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
        
        <main class="header">
            <div class="container pt-5">
                
            <div class="intro-info-content text-center">
                        <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">Our <a class="white-text font-weight-bold">Services</a></h1>
                </ul>
                <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate consequuntur praesentium quaerat minima maiores sint? </h5>
            </div>             
            <div class="row">
               
                <div class="col-md-4 col-xs-6 mb-5 fadeInDown">
                    <!-- Card -->
                    <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="/images/image3.jpg" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>Simple Permit</a></h4>
                    <!-- Text -->
                    <p class="card-text">For Structures not more than 1,500 sqm and/or not higher than 2 floor levels.</p>
                    <!-- Button -->
                    <a href="{{ route('kiosk.add-simple-permit', ['categ' => 1]) }}" class="btn btn-primary">Apply Now</a>

                    </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-md-4 col-xs-6 mb-5 fadeInDown">
                    <!-- Card -->
                    <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="/images/image2.jpg" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>Complex Permit</a></h4>
                    <!-- Text -->
                    <p class="card-text">For Structures equal to or more than 1,500 sqm and/or higher than 2 floor levels.</p>
                    <!-- Button -->
                    <a href="{{ route('kiosk.add-simple-permit', ['categ' => 2]) }}" class="btn btn-primary">Apply Now</a>

                    </div>

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 col-xs-6 mb-5 fadeInDown">



                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <!-- Card -->
                        <div class="card">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title"><a>Inquiry</a></h4>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- Button -->
                                <a href="#" class="btn btn-primary">Inquire Now</a>

                            </div>

                        </div>
                        <!-- Card -->

                        </div>
                        <div class="flip-card-back">
                        <h1>John Doe</h1> 
                        <p>Architect & Engineer</p> 
                        <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>  <!-- Row -->

            </div>
        </main>
    

    </body>
</html>
