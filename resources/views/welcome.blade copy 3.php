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
                height:90vh;
                background-image: linear-gradient(to right top, rgba(54,144,240,.85), rgba(18,44,135,.85)), url('/images/cityhall.jpg');
                background-repeat: no-repeat; background-size: cover; background-position: center center;
                clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    
                }

            }


            @media only screen and (max-width: 600px) {
            body {
                background-color: #1565c0;
            }
            .header {
                height:90vh;
                background-image: linear-gradient(to bottom right, rgba(73,155,234,.85), rgba(32,124,229,.85)), url('/images/cityhall.jpg');
                background-repeat: no-repeat; background-size: cover; background-position: center center;

    
                }
            }

            .butones {
                /* background-color: #303c6c; */
                background-color: #204969;
            }

            .butones-nav {
                background-color: #303c6c;
                /* background-color: #8806ce; */
            }

            .mytextcolor {
                /* color: #fcf594; */
                /* color: #fcfdd8; */
                color: #fbfad3;
            }

            


        </style>
    </head>
    <body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark butones-nav">
            <!-- Navbar brand -->
             <a class="navbar-brand d-inline" href="/">
                            <img src="/images/calapanlogo2.png" width="50px" height="50px" alt="">
                        </a>

            <a class="navbar-brand" href="/">ACP</a>
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
                    <a class="nav-link" href="{{ route('kiosk.about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kiosk.about')}}#faqhead">FAQ</a>
                </li>
                </ul>
                <!-- Links -->
                @if (Route::has('login'))
                        <div class="">
                        @auth
                            <a href="{{ route('admins.index') }}" class="d-inline nav-link text-white">Admin</a>
                        @else
                            <a href="{{ route('login') }}" class="d-inline nav-link text-white">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }} " class="d-inline nav-link text-white">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
        
        <main class="header">
            <div class="">
                <div class="container pt-5 ">
                
                <div class="intro-info-content text-center">
                    <h1 class="display-4 mytextcolor mb-5  wow fadeInDown" data-wow-delay="0.3s">Acquisition of Construction Permits <a class="mytextcolor font-weight-bold">Express</a></h1>
                    </ul>
                    <h5 class="text-uppercase mytextcolor mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Lets you apply for Building Permits and its ancillaries anytime, anywhere. </h5>
                </div>             
                <div class="row">
                
                    <div class="col-md-4 col-xs-6 mb-5 fadeInDown">
                        <!-- Card -->
                        <div class="card">

                        <!-- Card image -->
                            <div class="view">
                                <img class="card-img-top img-fluid" src="/images/image3.jpg" alt="Card image cap">
                                <div class="mask">

                                </div>          
                            </div>
                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title"><a>Simple Structure</a></h4>
                                <!-- Text -->
                                <p class="card-text">For Structures not more than 1,500 sqm and/or not higher than 2 floor levels.</p>
                                <!-- Button -->
                                <a href="{{ route('kiosk.add-simple-permit', ['categ' => 1]) }}" class="btn butones">Apply Now</a>

                             </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-xs-6 mb-5 fadeInDown">
                        <!-- Card -->
                        <div class="card">

                        <!-- Card image -->
                        <div class="view">
                            <img class="card-img-top img-fluid" src="/images/image2.jpg" alt="Card image cap">
                            <!-- <img class="card-img-top img-fluid" src="/images/calapanlogo2.png"  width="10px" height="10px"  alt="Card image cap"> -->
                            <div class="mask">

                            </div>          
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><a>Complex Structure</a></h4>
                        <!-- Text -->
                        <p class="card-text">For Structures equal to or more than 1,500 sqm and/or higher than 2 floor levels.</p>
                        <!-- Button -->
                        <a href="{{ route('kiosk.add-simple-permit', ['categ' => 2]) }}" class="btn butones">Apply Now</a>

                        </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <div class="col-md-4 col-xs-6 mb-5 fadeInDown">
                        <!-- Card -->
                        
                        <div class="card border-white">
                        <div class="card-header  butones-nav">
                                    <h3 class="h3 text-white" >Inquiry</h3>
                        </div>

                            <!-- Card content -->
                            <div class="card-body">
                                <p class="text-muted">Input Either of the 3 options</p>
                                <form class="m-0 p-0" action="{{ route('kiosk.search')}}" method="POST" enctype="multipart/form-data"> 
                                    @csrf
                                    <input type="text" id="application_id" name="application_id" class="form-control mb-2" placeholder="Application No.">
                                    <p class="mb-2 p-0 text-center text-muted"> Or </p>
                                    <input type="text" id="tct" name="tct" class="form-control mb-2" placeholder="TCT No.">
                                    <p class="mb-2 p-0 text-center text-muted"> Or </p>
                                    <div class="row">
                                        <div class="col-md-6 mx-0 px-2 col-6">
                                            <input type="text" id="fname" name="fname" class="form-control mb-2" placeholder="First Name">
                                            
                                        </div>
                                        <div class="col-md-6 mx-0 px-2 col-6">
                                                <input type="text" id="lname" name="lname" class="form-control mb-2" placeholder="Last Name">

                                        </div>
                                    </div>
                                    
                                    <button class="btn butones  mt-4 mb-3" type="submit">INQUIRE NOW</button>
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{session()->get('error')}}
                                        </div>
                                    @endif
                                </form>
                            </div>  <!-- Row -->
                        </div>
                    </div>

        
            </div>
            </div>
        </main>
        <script>
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 5000);
        </script>

    </body>
</html>
