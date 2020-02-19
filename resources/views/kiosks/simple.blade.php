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
                height:120vh;
                background-image: linear-gradient(to right top, rgba(54,144,240,.85), rgba(18,44,135,.85)), url('/images/cityhall.jpg');
                background-repeat: no-repeat; background-size: cover; background-position: center center;

    
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
                background-color: #204969;
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
            @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>
        @endif
        
        <div >
            <div class="header">
                <div class="container pt-5 mb-5">
                    
                    <div class="intro-info-content text-center">
                                <h1 class="display-3 white-text mb- wow fadeInDown" data-wow-delay="0.3s">{{ $categx === '1' ? 'Simple Structure' : 'Complex Structure'}}</h1>
                        </ul>
                        <h5 class="text-uppercase white-text mb-5 mt-1 wow fadeInDown" data-wow-delay="0.3s">
                        {{ $categx === '1' ? 'For Structures not more than 1,500 sqm and not higher than 2 floor levels. ' : 'For Structures more than 1,500 sqm or higher than 2 floor levels. '}}</h5>
                    </div>       
                    
                    <div class="bg-light py-5 px-5">
                        <form action="{{ route('kiosk.simple-store') }}" method="POST"  enctype="multipart/form-data" class="" >
                            @csrf
                            <h4>Owner/Applicant Details</h4>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="fname">First name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{Request::old('fname')}}" required>
                                </div>
                                <div class="col-md-2 mb-3">
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
                                <div class="col-md-2 mb-3">
                                    <label for="tin">TIN</label>
                                    <input type="text" class="form-control" name="tin" id="tin" placeholder="TIN" value="{{Request::old('tin')}}">
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
                            </div>
                            <h4>For Construction Owned by an Enterprise</h4>
                            <div class="form-row">
                            <div class="col-md-8 mb-3">
                                    <label for="ownerform">Form of Ownership</label>
                                    <input type="text" class="form-control" name="ownerform" id="ownerform" placeholder="Corporation/Partnership/etc" value="{{Request::old('ownerform')}}">
                                </div>
                            </div>
                            <h4>Location of Construction</h4>
                            <div class="form-row">
                                <div class="col-md-1 mb-3">
                                    <label for="loc_blk">Block No.</label>
                                    <input type="number" class="form-control" name="loc_blk" id="loc_blk" placeholder="" value="{{Request::old('loc_blk')}}">
                                </div>
                                <div class="col-md-1 mb-3">
                                    <label for="loc_lot">Lot No.</label>
                                    <input type="number" class="form-control" name="loc_lot" id="loc_lot" placeholder="" value="{{Request::old('loc_lot')}}">
                                </div>
                                <div class="col-md-2 mb-3">
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
                                <div class="col-md-2 mb-3">
                                    <label for="tct">TCT No.</label>
                                    <input type="text" class="form-control" name="tct" id="tct" placeholder="TCT No." value="{{Request::old('tct')}}">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="taxdec">Tax Dec. No.</label>
                                    <input type="text" class="form-control" name="taxdec" id="taxdec" placeholder="Tax Dec. No." value="{{Request::old('taxdec')}}">
                                </div>
                            </div>
                            <h4>Construction Details</h4>
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
                                <div class="col-md-2 mb-3">
                                    <label for="storeys">Storeys</label>
                                    <input type="number" class="form-control" name="storeys" id="storeys" placeholder="" value="{{Request::old('storeys')}}" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="floorarea">Total FA.</label>
                                    <input type="number" class="form-control" name="floorarea" id="floorarea" placeholder="" value="{{Request::old('floorarea')}}" required> 
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="cost">Total Est. Cost</label>
                                    <input type="text" class="form-control" name="cost" id="cost" placeholder="PHP" value="{{Request::old('cost')}}" required>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="start">Proposed Date of Construction </label>
                                    <input type="text" class="form-control" name="start" id="start" placeholder="YYYY-MM-DD" value="{{Request::old('start')}}" required> 
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="end">Expected Date of Construction</label>
                                    <input type="text" class="form-control" name="end" id="end" placeholder="YYYY-MM-DD" value="{{Request::old('end')}}" required>
                                </div>

                            </div>
                            <input  type="hidden" class="form-control" name="category_id" id="category_id" placeholder="First name" value="{{$categx}}" required>

                            
                            <button class="btn butones" type="submit">Submit</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>

<script >
$('.datepicker').pickadate();
</script>  

    </body>

    </html>
