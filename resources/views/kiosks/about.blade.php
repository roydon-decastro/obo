<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Required meta tags always come first  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ACP Express</title>
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <style>

        html,
        body,
        header,
        .jarallax {
          height: 700px;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 560px) and (max-width: 650px) {
          header .jarallax h1 {
            margin-bottom: 1.5rem !important;
          }
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #3f51b5!important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent!important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        h5 {
            letter-spacing: 3px;
        }
    </style>
</head>
<body>

    <!-- Main Navigation -->
    <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
      <img src="/images/Calapan_City_Logo.png" height="40" class="d-inline-block align-top"
        alt="mdb logo">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">ACP Express
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
          </li>
        </ul>
         





                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="nav-link dropdown-item  blue-text" href="{{ route('admins.index') }}">Admin</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
























      </div>
    </div>
  </nav>

        <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(/images/cityhall.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">Office of the Building Official <a class="white-text font-weight-bold"></a></h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Calapan, Oriental Mindoro </h5>

                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </header>
    <!-- Main Navigation -->

    <!-- Main Layout -->
    <main>

        <div class="container">

            <!-- Section: Team v.3 -->
            <section id="team" class="section team-section pb-4 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="font-weight-bold text-center h1 my-5">Office of the Building Official Team</h2>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!-- Grid row -->
                <div class="row mb-lg-4 text-center text-md-left">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="/images/profile-pic3.jpg" class="z-depth-1" alt="First sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>ENGR. BENJAMIN L. ACEDERA</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Web Designer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            
                            <!-- Twitter -->
                            
                            <!-- Dribbble -->
                            
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Second sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Engr. Romel Ronquillo</strong></h4>
                           <h6 class="font-weight-bold grey-text mb-4">Photographer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            
                            <!-- YouTube -->
                            <!-- Instagram -->
                            
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row text-center text-md-left">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Fourth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Engr. Sherwin O R delos Reyes</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Web Developer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            
                            <!-- Twitter -->
                            
                           <!-- GitHub -->
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Fifth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Engr. Amormio JA S. Benter</strong></h4>
                           <h6 class="font-weight-bold grey-text mb-4">Drainage</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Google + -->
                            <!-- LinkedIn -->
                            <!-- Email -->
                        </div>

                    </div>
                    <!-- Grid column -->

                    

                </div>
                <!-- Grid row -->



                <!-- Grid row -->
                <div class="row text-center text-md-left">

                        <!-- Grid column -->
                        <div class="col-lg-6 col-md-12 mb-4">

                            <div class="col-md-6 float-left">
                                <div class="avatar mx-auto mb-md-0 mb-3">
                                    <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Fourth sample avatar image">
                                </div>
                            </div>

                            <div class="col-md-6 float-right">
                                <h4><strong>Engr. Jenalyn Ramirez</strong></h4>
                                <h6 class="font-weight-bold grey-text mb-4">Roads</h6>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                                <!-- Facebook -->
                                
                                <!-- Twitter -->
                                
                            <!-- GitHub -->
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="col-md-6 float-left">
                                <div class="avatar mx-auto mb-md-0 mb-3">
                                    <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Fifth sample avatar image">
                                </div>
                            </div>

                            <div class="col-md-6 float-right">
                                <h4><strong>Engr. Moss L. Simbahan</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Buildings</h6>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                                <!-- Google + -->
                                <!-- LinkedIn -->
                                <!-- Email -->
                            </div>

                        </div>
                        <!-- Grid column -->



                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row text-center text-md-left">

                        <!-- Grid column -->
                        <div class="col-lg-6 col-md-12 mb-4">

                            <div class="col-md-6 float-left">
                                <div class="avatar mx-auto mb-md-0 mb-3">
                                    <img src="/images/Calapan_City_Logo.png" class="z-depth-1" alt="Fourth sample avatar image">
                                </div>
                            </div>

                            <div class="col-md-6 float-right">
                                <h4><strong>Engr. Pamfilo Buela</strong></h4>
                                <h6 class="font-weight-bold grey-text mb-4">Electrical</h6>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                                <!-- Facebook -->
                                
                                <!-- Twitter -->
                                
                            <!-- GitHub -->
                            </div>

                        </div>
                        <!-- Grid column -->


                        <!-- Grid column -->
                        <div class="col-lg-6 col-md-12 mb-4">

                            <div class="col-md-6 float-left">
                                <div class="avatar mx-auto mb-md-0 mb-3">
                                    <img src="/images/lea.jpg" class="z-depth-1" alt="Fourth sample avatar image">
                                </div>
                            </div>

                            <div class="col-md-6 float-right">
                                <h4><strong>Lea Carpio</strong></h4>
                                <h6 class="font-weight-bold grey-text mb-4"></h6>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                                <!-- Facebook -->
                                
                                <!-- Twitter -->
                                
                            <!-- GitHub -->
                            </div>

                        </div>
                        <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Team v.3 -->


            <hr class="my-5">

            <!-- Section: Gallery -->
            <section id="gallery" class="section wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h1 class="font-weight-bold text-center h1 my-5">Our work</h1>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <div class="row pb-4">
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(41).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(40).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(40).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(42).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                        </div>

                    </div>

                </div>

            </section>
            <!-- /Section: Gallery -->

            <hr class="my-5">

            <!-- Section: Contact v.2 -->
            <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="font-weight-bold text-center h1 my-5">Contact us</h2>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-9">
                        <form>

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-name" class="form-control">
                                            <label for="contact-name" class="">Your name</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-email" class="form-control">
                                            <label for="contact-email" class="">Your email</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-4">

                                <!-- Grid column -->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="contact-message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!-- Grid row -->

                        </form>

                        <div class="text-center text-md-left mb-4">
                            <a class="btn btn-light-blue">Send</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons text-center list-unstyled">
                            <li><i class="fas fa-map-marker fa-2x"></i>
                                <p>Calapan City Hall</p>
                            </li>

                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                </div>

            </section>
            <!-- Section: Contact v.2 -->

        </div>

    </main>
    <!-- Main Layout -->

    <!-- Footer -->
    <footer class="page-footer pt-4 mt-4 indigo text-center text-md-left">



        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; 2018 Copyright: <a href="https://mdbootstrap.com/docs/jquery/"> MDBootstrap.com </a>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
        new WOW().init();

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

    </script>
</body>
</html>
