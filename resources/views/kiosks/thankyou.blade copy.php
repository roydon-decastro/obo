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
                height:100vh;
                background-image: linear-gradient(to bottom right, rgba(73,155,234,.85), rgba(32,124,229,.85)), url('/images/cityhall.jpg');
                background-repeat: no-repeat; background-size: cover; background-position: center center;

    
                }
            }

            .butones {
                /* background-color: #303c6c; */
                background-color: #1a3263;
            }

            .butones-nav {
                background-color: #303c6c;
                /* background-color: #8806ce; */
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
            <div class="container pt-5">
                
                <div class="intro-info-content text-center">
                    <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">Thank you!</a></h1>
                    </ul>
                    <h3 class=" white-text mb-5 mt-1 wow fadeInDown" data-wow-delay="0.3s">We are glad to be of service. Please be assured that your request will be handled promptly. Please take note of the details below.</h3>

                </div>  
                <div class="p-5 row">
                    <div class="col-md-6 mb-5">
                        <h3 class="h3 text-white pb-3">Application Details</h3>

                        <h4 class="text-white pl-3">Application ID: {{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</h4>
                        <h4 class="text-white pl-3">Applicant Name: {{$permit->fname . " " . $permit->lname }}</h4>
                        <h4 class="text-white pl-3">Location of Construction: {{$permit->loc_street . " " . $permit->barangay->name }}</h4>
                        <h4 class="text-white pl-3">Status: {{$permit->state->name }}</h4>
                        <h4 class="text-white pl-3"></h4>
                        <h4 class="text-white pl-3"></h2>
                    </div>           
                    <div  class="col-md-6">
                        <h3 class="h3 text-white pb-3">Download Permits</h3>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadbuildingpdf', $permit->id) }}" class="btn btn-lg d-block butones">Building</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadcivilpdf', $permit->id) }}" class="btn btn-lg d-block butones">Civil/Structural</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadelectricalpdf', $permit->id) }}" class="btn btn-lg d-block butones">Electrical</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadelectronicspdf', $permit->id) }}" class="btn btn-lg d-block butones">Electronics</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadmechanicalpdf', $permit->id) }}" class="btn btn-lg d-block butones">Mechanical</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadplumbingpdf', $permit->id) }}" class="btn btn-lg d-block butones">Plumbing</a>
                            </div>
                        </div>
                        <p class="text-muted white-text"><em>(It may take a few seconds for each download to start depending on Internet speed.)</em></p>
                        <p class="text-muted white-text"><em>(IMPORTANT! Please print each permit BACK-TO-BACK also 5 copies each permit.)</em></p>
                    </div>  
                </div>
            </div>
        </main>
    

    </body>
</html>
