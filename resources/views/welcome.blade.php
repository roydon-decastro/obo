<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Office of the Building Official</title>
    <link rel="icon" href="/images/Calapan_City_Logo.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<!-- Bootstrap core CSS -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



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
    height: 0;
    width: 0;
    }

@media (max-width: 576px) {
    .hidewhensmall {
        visibility: hidden;
        height: 0;
        width: 0;
    }

    .hidewhenlarge {
        visibility: visible;
        height: auto;
        width: 100%;
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
  <div class="view" style="background-image: url('/images/lines2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
            <div class=" col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-5"> <span style="font-size:3rem; color:#042f4b">A</span>cquisition of <span style="font-size:3rem; color:#042f4b">C</span>onstruction <span style="font-size:3rem; color:#042f4b">P</span>ermit <em style="color:yellow"> <span style="font-size:3rem; ">E</span>xpress </em> </h1>
                <hr class="hr-light">
                <h5 class="mb-4">Lets you apply for Building Permits and its ancillaries anytime, anywhere. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, inventore.<a href="#" class="yellow-text font-weight-bold" data-toggle="tooltip" title="For Structures not more than 1,500 sqm and/or not higher than 2 floor levels">Simple Structure</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perspiciatis vitae eveniet<a href="#" class="yellow-text font-weight-bold" data-toggle="tooltip" title="For Structures equal to or more than 1,500 sqm and/or higher than 2 floor levels"> Complex Structure</a> neque libero facere explicabo aliquid assumenda, deserunt totam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptates!</h5>
                <div class="row">
                    <div class="col-md-6">
                         <span data-toggle="modal" data-target="#modalSimplePermit">
                             <a class="btn pink darken-1 d-block" id="simpleButton" data-target="#modalPermit" data-toggle="tooltip" title="For Structures not more than 1,500 sqm and/or not higher than 2 floor levels">Simple Structure</a>
                         </span>
                        </div>
                        <div class="col-md-6">
                            <span data-toggle="modal" data-target="#modalComplexPermit">
                                <a class="btn pink darken-1 d-block" id="complexButton" data-toggle="tooltip" title="For Structures equal to or more than 1,500 sqm and/or higher than 2 floor levels">Complex Structure</a>
                            </span>
                         </div>

                         <div class="col-md-6">
                            <span data-toggle="modal" data-target="#modalOccupancy">
                                <a class="btn pink darken-1 d-block" id="occupancyButton" data-toggle="tooltip" title="">Occupancy Certificate</a>
                            </span>
                         </div>

                         <div class="col-md-6">
                            <span data-toggle="modal" data-target="#modalInquiry">
                                <a class="btn blue darken-1 d-block" id="" data-toggle="tooltip" title="">Permit Inquiries</a>
                            </span>
                         </div>
                    
                </div>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight py-5 hidewhensmall" data-wow-delay="0.3s">
                @if(session()->has('error'))
                <div class="alert red white-text alert-danger">
                    {{session()->get('error')}}
                </div>
                @endif
                <div class="pl-5 mx-5">
                    <img src="/images/Calapan_City_Logo.png" class=" d-inline" alt="Responsive image">
                </div>

          </div>

          <!--Grid column-->
        </div>
        <!--Grid row-->
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
<!--Modal: Permit-->
<div class="modal fade" id="modalSimplePermit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg cascading-modal modal-avatar modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="/images/calapanlogo.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body mb-1">
          <h1 class="blue darken-1 text-white text-center py-2 mb-4" id="category_title"></h1>
            <form action="{{ route('kiosk.simple-store') }}" method="POST"  enctype="multipart/form-data" class="" >
                @csrf
                <h4 class="pink-text">Owner/Applicant Details</h4>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{Request::old('fname')}}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" value="{{Request::old('lname')}}" required>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="mi_name">MI</label>
                        <input type="text" class="form-control" name="mi_name" id="mi_name" placeholder="MI" value="{{Request::old('mi_name')}}" >
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{Request::old('email')}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="telephone">Telephone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone" value="{{Request::old('email')}}">
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{Request::old('address')}}" required>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zip code" value="{{Request::old('zipcode')}}">
                    </div>    
                    <div class="col-md-2 mb-3">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" name="tin" id="tin" placeholder="TIN" value="{{Request::old('tin')}}">
                    </div>
                </div>
                <h4 class="pink-text">For Construction Owned by an Enterprise</h4>
                <div class="form-row">
                <div class="col-md-8 mb-3">
                        <label for="ownerform">Form of Ownership</label>
                        <input type="text" class="form-control" name="ownerform" id="ownerform" placeholder="Corporation/Partnership/etc" value="{{Request::old('ownerform')}}">
                    </div>
                </div>
                <h4 class="pink-text">Location of Construction</h4>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="loc_blk">Block No.</label>
                        <input type="number" class="form-control" name="loc_blk" id="loc_blk" placeholder="" value="{{Request::old('loc_blk')}}">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="loc_lot">Lot No.</label>
                        <input type="number" class="form-control" name="loc_lot" id="loc_lot" placeholder="" value="{{Request::old('loc_lot')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="loc_street">Street</label>
                        <input type="text" class="form-control" name="loc_street" id="loc_street" placeholder="Street" value="{{Request::old('loc_street')}}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="barangay_id">Barangay</label>
                        <select class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id" required>
                                @foreach($barangays as $barangay)
                                        <option value=" {{ $barangay->id }} "> {{ $barangay->name }} </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="tct">TCT No.</label>
                        <input type="text" class="form-control" name="tct" id="tct" placeholder="TCT No." value="{{Request::old('tct')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="taxdec">Tax Dec. No.</label>
                        <input type="text" class="form-control" name="taxdec" id="taxdec" placeholder="Tax Dec. No." value="{{Request::old('taxdec')}}">
                    </div>
                </div>

                <h4 class="pink-text">Construction Details</h4>
                <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="scopes">Scope of Work</label>
                            <select class="form-control browser-default custom-selects" value="" name="scopes[]" id="scopes">
                                    @foreach($scopes as $scope)
                                            <option value=" {{ $scope->id }} "> {{ $scope->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="occupantsid">Use or Character of Occupancy</label>
                            <select class="form-control browser-default custom-selects" value="" name="occupants[]" id="occupantsid">
                                    @foreach($occupants as $occupant)
                                            <option value=" {{ $occupant->id }} "> {{ $occupant->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="storeys">Storeys</label>
                            <input type="number" class="form-control" name="storeys" id="storeys" placeholder="" value="{{Request::old('storeys')}}" required max="3">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="floorarea">Total FA.</label>
                            <input type="number" class="form-control" name="floorarea" id="floorarea" placeholder="" value="{{Request::old('floorarea')}}" required max="1500"> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cost">Total Est. Cost</label>
                            <input type="text" class="form-control" name="cost" id="cost" placeholder="PHP" value="{{Request::old('cost')}}" required>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="start">Proposed Date of Construction </label>
                            <input type="text" class=" date form-control" name="start" id="start" placeholder="" value="{{Request::old('start')}}" required> 
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start">Expected Date of Completion </label>
                            <input type="text" class=" date form-control" name="end" id="end" placeholder="" value="{{Request::old('end')}}" required> 

                        </div>

                    </div>
                <input  type="hidden" class="form-control" name="category_id" id="category_id" placeholder="category" value="{{$categx}}" required>

                
                <button class="btn pink" type="submit">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Permit-->

<!--Modal: Permit-->
<div class="modal fade" id="modalComplexPermit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg cascading-modal modal-avatar modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="/images/calapanlogo.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body mb-1">
          <h1 class="blue darken-1 text-white text-center py-2 mb-4" id="category_title_complex"></h1>
            <form action="{{ route('kiosk.simple-store') }}" method="POST"  enctype="multipart/form-data" class="" >
                @csrf
                <h4 class="pink-text">Owner/Applicant Details</h4>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{Request::old('fname')}}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" value="{{Request::old('lname')}}" required>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="mi_name">MI</label>
                        <input type="text" class="form-control" name="mi_name" id="mi_name" placeholder="MI" value="{{Request::old('mi_name')}}" >
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{Request::old('email')}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="telephone">Telephone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone" value="{{Request::old('email')}}">
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{Request::old('address')}}" required>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zip code" value="{{Request::old('zipcode')}}">
                    </div>    
                    <div class="col-md-2 mb-3">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" name="tin" id="tin" placeholder="TIN" value="{{Request::old('tin')}}">
                    </div>
                </div>
                <h4 class="pink-text">For Construction Owned by an Enterprise</h4>
                <div class="form-row">
                <div class="col-md-8 mb-3">
                        <label for="ownerform">Form of Ownership</label>
                        <input type="text" class="form-control" name="ownerform" id="ownerform" placeholder="Corporation/Partnership/etc" value="{{Request::old('ownerform')}}">
                    </div>
                </div>
                <h4 class="pink-text">Location of Construction</h4>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="loc_blk">Block No.</label>
                        <input type="number" class="form-control" name="loc_blk" id="loc_blk" placeholder="" value="{{Request::old('loc_blk')}}">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="loc_lot">Lot No.</label>
                        <input type="number" class="form-control" name="loc_lot" id="loc_lot" placeholder="" value="{{Request::old('loc_lot')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="loc_street">Street</label>
                        <input type="text" class="form-control" name="loc_street" id="loc_street" placeholder="Street" value="{{Request::old('loc_street')}}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="barangay_id">Barangay</label>
                        <select class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id" required>
                                @foreach($barangays as $barangay)
                                        <option value=" {{ $barangay->id }} "> {{ $barangay->name }} </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="tct">TCT No.</label>
                        <input type="text" class="form-control" name="tct" id="tct" placeholder="TCT No." value="{{Request::old('tct')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="taxdec">Tax Dec. No.</label>
                        <input type="text" class="form-control" name="taxdec" id="taxdec" placeholder="Tax Dec. No." value="{{Request::old('taxdec')}}">
                    </div>
                </div>

                <h4 class="pink-text">Construction Details</h4>
                <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="scopes">Scope of Work</label>
                            <select class="form-control browser-default custom-selects" value="" name="scopes[]" id="scopes">
                                    @foreach($scopes as $scope)
                                            <option value=" {{ $scope->id }} "> {{ $scope->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="occupantsid">Use or Character of Occupancy</label>
                            <select class="form-control browser-default custom-selects" value="" name="occupants[]" id="occupantsid">
                                    @foreach($occupants as $occupant)
                                            <option value=" {{ $occupant->id }} "> {{ $occupant->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="storeys">Storeys</label>
                            <input type="number" class="form-control" name="storeys" id="storeys" placeholder="" value="{{Request::old('storeys')}}" required >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="floorarea">Total FA.</label>
                            <input type="number" class="form-control" name="floorarea" id="floorarea" placeholder="" value="{{Request::old('floorarea')}}" required> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cost">Total Est. Cost</label>
                            <input type="text" class="form-control" name="cost" id="cost" placeholder="PHP" value="{{Request::old('cost')}}" required>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="start">Proposed Date of Construction </label>
                            <input type="text" class=" date form-control" name="start" id="start" placeholder="" value="{{Request::old('start')}}" required> 
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start">Expected Date of Completion </label>
                            <input type="text" class=" date form-control" name="end" id="end" placeholder="" value="{{Request::old('end')}}" required> 

                        </div>

                    </div>
                <input  type="hidden" class="form-control" name="category_id" id="category_id_complex" placeholder="category" value="{{$categx}}" required>

                
                <button class="btn pink" type="submit">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Permit-->

<!--Modal: Occupancy-->
<div class="modal fade" id="modalOccupancy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg cascading-modal modal-avatar modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="/images/calapanlogo.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body mb-1">
          <h1 class="blue darken-1 text-white text-center py-2 mb-4" id="category_title2"></h1>
            <form action="{{ route('kiosk.simple-store') }}" method="POST"  enctype="multipart/form-data" class="" >
                @csrf
                <h4 class="pink-text">Owner/Applicant Details</h4>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{Request::old('fname')}}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" value="{{Request::old('lname')}}" required>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="mi_name">MI</label>
                        <input type="text" class="form-control" name="mi_name" id="mi_name" placeholder="MI" value="{{Request::old('mi_name')}}" >
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{Request::old('email')}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="telephone">Telephone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone" value="{{Request::old('email')}}">
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{Request::old('address')}}" required>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zip code" value="{{Request::old('zipcode')}}">
                    </div>    
                    <div class="col-md-2 mb-3">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" name="tin" id="tin" placeholder="TIN" value="{{Request::old('tin')}}">
                    </div>
                </div>
                <h4 class="pink-text">For Construction Owned by an Enterprise</h4>
                <div class="form-row">
                <div class="col-md-8 mb-3">
                        <label for="ownerform">Form of Ownership</label>
                        <input type="text" class="form-control" name="ownerform" id="ownerform" placeholder="Corporation/Partnership/etc" value="{{Request::old('ownerform')}}">
                    </div>
                </div>
                <h4 class="pink-text">Location of Construction</h4>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="loc_blk">Block No.</label>
                        <input type="number" class="form-control" name="loc_blk" id="loc_blk" placeholder="" value="{{Request::old('loc_blk')}}">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="loc_lot">Lot No.</label>
                        <input type="number" class="form-control" name="loc_lot" id="loc_lot" placeholder="" value="{{Request::old('loc_lot')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="loc_street">Street</label>
                        <input type="text" class="form-control" name="loc_street" id="loc_street" placeholder="Street" value="{{Request::old('loc_street')}}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="barangay_id">Barangay</label>
                        <select class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id" required>
                                @foreach($barangays as $barangay)
                                        <option value=" {{ $barangay->id }} "> {{ $barangay->name }} </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="tct">TCT No.</label>
                        <input type="text" class="form-control" name="tct" id="tct" placeholder="TCT No." value="{{Request::old('tct')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="taxdec">Tax Dec. No.</label>
                        <input type="text" class="form-control" name="taxdec" id="taxdec" placeholder="Tax Dec. No." value="{{Request::old('taxdec')}}">
                    </div>
                </div>

                <h4 class="pink-text">Construction Details</h4>
                <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="scopes">Scope of Work</label>
                            <select class="form-control browser-default custom-selects" value="" name="scopes[]" id="scopes">
                                    @foreach($scopes as $scope)
                                            <option value=" {{ $scope->id }} "> {{ $scope->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="occupantsid">Use or Character of Occupancy</label>
                            <select class="form-control browser-default custom-selects" value="" name="occupants[]" id="occupantsid">
                                    @foreach($occupants as $occupant)
                                            <option value=" {{ $occupant->id }} "> {{ $occupant->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="storeys">Storeys</label>
                            <input type="number" class="form-control" name="storeys" id="storeys" placeholder="" value="{{Request::old('storeys')}}" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="floorarea">Total FA.</label>
                            <input type="number" class="form-control" name="floorarea" id="floorarea" placeholder="" value="{{Request::old('floorarea')}}" required> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cost">Total Est. Cost</label>
                            <input type="text" class="form-control" name="cost" id="cost" placeholder="PHP" value="{{Request::old('cost')}}" required>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="start">Proposed Date of Construction </label>
                            <input type="text" class=" date form-control" name="start" id="start" placeholder="" value="{{Request::old('start')}}" required> 
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start">Expected Date of Completion </label>
                            <input type="text" class=" date form-control" name="end" id="end" placeholder="" value="{{Request::old('end')}}" required> 

                        </div>

                    </div>
                <input  type="hidden" class="form-control" name="category_id" id="category_id_occupancy" placeholder="category" value="{{$categx}}" required>

                
                <button class="btn pink" type="submit">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Occupancy-->



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
        $("#category_id_complex").val("2");
        $("#category_title_complex").text("Complex Structure");
  });
</script>

<script>
    $("#occupancyButton").click(function(){
        $("#category_id_occupancy").val("3");
        $("#category_title2").text("Occupancy Certificate");
  });
</script>12345678910

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  

<script>
// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("/images/mdb-lightbox-ui.html");
});
</script>
</body>
</html>
