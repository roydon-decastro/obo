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

        /* Required for full background image */

  html,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 1000px;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 600px;
    }
  }

  .btn .fa {
    margin-left: 3px;
  }

  .top-nav-collapse {
    background-color: #424f95 !important;
  }

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
 .navbar:not(.top-nav-collapse) {
  background: #424f95 !important;
 }
}

.btn-white {
  color: black !important;
}

h6 {
  line-height: 1.7;
}

.rgba-gradient {
  background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
  background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
}

.composition {
    position: relative;

}

.photo {
    width: 65%;
    box-shadow: 0 1.5rem 4rem rgba(0,0,0,0.4);
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    transition: all .2s;
    outline-offset:1rem;

}

.photo:hover {
    transform: scale(1.05);
    box-shadow: 0 1.5rem 4rem rgba(0,0,0,0.8);
    z-index: 20;
    outline: .5rem solid #e91e63;

}

.photo1 {
    position: absolute;
    left: 1rem;
    top: 4rem;
}
.photo2 {
    position: absolute;
    left: 14rem;
    top: -7rem;    
}
.photo3 {
    position: absolute;
    left: 6rem;
    top: -16rem;
}

.composition:hover .photo:not(:hover) {
    transform: scale(.9);
}

.baba {
    padding-top: 15rem;
}

.hidewhenlarge {
    visibility: hidden;
    }

@media (max-width: 576px) {
    .hidewhensmall {
        visibility: hidden;
    }

    .hidewhenlarge {
    visibility: visible;
    }
 }

    </style>
</head>
<body>
<!-- Main navigation -->
<header>
  <!--Navbar-->
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
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('/images/lines4.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">


      <div class="intro-info-content text-center">
      <h1 class="display-3 white-text mb-5 wow fadeInDown pt-5" data-wow-delay="0.3s">Search Results</a></h1>
                    </ul>
                    <h3 class=" white-text mb-5 mt-1 wow fadeInDown" data-wow-delay="0.3s">Please be informed that search results takes only the latest application record. To be precise please use the Application No. when searching for your application.</h3>

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
                    @if($permit->category_id == '3')
                    <div class="col-md-6">
                    <h3 class="h3 text-white pb-3">Download Occupancy Certificate</h3>
                    <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadoccupancypdf', $permit->id) }}" class="btn btn-lg d-block pink">Download</a>
                            </div>
                        </div>                    
                    </div>
                    @else              
                    <div  class="col-md-6">
                        <h3 class="h3 text-white pb-3">Download Permits</h3>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadbuildingpdf', $permit->id) }}" class="btn btn-lg d-block pink">Building</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadcivilpdf', $permit->id) }}" class="btn btn-lg d-block pink">Civil/Structural</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadelectricalpdf', $permit->id) }}" class="btn btn-lg d-block pink">Electrical</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadelectronicspdf', $permit->id) }}" class="btn btn-lg d-block pink">Electronics</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadmechanicalpdf', $permit->id) }}" class="btn btn-lg d-block pink">Mechanical</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <a href="{{ route('kiosk.downloadplumbingpdf', $permit->id) }}" class="btn btn-lg d-block pink">Plumbing</a>
                            </div>
                        </div>
                        <p class="font-weight-bold white-text"><em>(It may take a few seconds for each download to start depending on Internet speed.)</em></p>
                        <p class="font-weight-bold white-text"><em>(IMPORTANT! Please print each permit BACK-TO-BACK also 5 copies each permit.)</em></p>
                    </div>  
                    @endif
                </div>


      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->

<!--Modal: Inquiry-->
<div class="modal fade" id="modalInquiry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="/images/calapanlogo.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body mb-1">

            <form class="m-0 p-0" action="{{ route('kiosk.search')}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <h3 class="blue darken-1 text-white text-center py-2 mb-4">Permit Inquiry</h3>
                <p>Please Input Either of the 3 options</p>
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
                
                <button class="btn pink mt-4 mb-3" type="submit">INQUIRE NOW</button>

            </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Inquiry-->




<script>
setTimeout(function() {
    $('.alert').fadeOut('fast');
}, 5000);
</script>
<script>
// Tooltips Initialization
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
  $("#simpleButton").click(function(){
    $("#category_id").val("1");
    $("#category_title").text("Simple Structure");
});
</script>

<script>
    $("#complexButton").click(function(){
        $("#category_id").val("2");
        $("#category_title").text("Complex Structure");
  });
</script>

<script >
$('.datepicker').pickadate();
</script>  

<script>
// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("/images/mdb-lightbox-ui.html");
});
</script>
</body>
</html>
