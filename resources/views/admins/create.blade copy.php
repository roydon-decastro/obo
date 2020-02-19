<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OM Office of the Building Official</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
  <!-- Bootstrap core CSS -->

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" ></script>

      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>


  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">OBO</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About
                MDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank">Free
                download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free
                tutorials</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>MDB GitHub
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->



  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">




            <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Permits</span>
            <span>/</span>
            <span>New</span>
        </h4>

        <div class="justify-content-end ">
            <a href="{{ route('admins.create') }}" class="btn btn-success btn-md">{{isset($permit) ? 'Create' : 'Update' }}  Permit Request</a>
            </div>

        </div>

    </div>
<!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 col-sm-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">




            <form class="p-5" action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            @if(isset($permit))
                @method('PUT')
            @endif
          <h4 class="h4">Permit Details</h4>
          <div class="row">
            <div class="col-md-3">

              <div class="form-group">
                  <label class="grey-text" for="category_id">Category</label>
                  <select class="form-control browser-default custom-selects" value="" name="category_id" id="category_id">
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}"
                      @if(isset($permit))
                          @if($category->id === $permit->category_id)
                              selected
                          @endif 
                      @endif > {{ $category->name}}

                  @endforeach
                  </select>
              </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="grey-text" for="state_id">Status</label>
                    <select class="form-control browser-default custom-selects" name="state_id" id="state_id">
                    @foreach($states as $state)
                        <option value="{{ $state->id }}"
                        @if(isset($permit))
                            @if($state->id === $permit->state_id)
                                selected
                            @endif 
                        @endif > {{ $state->name}}

                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label class="grey-text" for="type">Type</label>
                  <input type="text" class="form-control" value="{{ isset($permit) ? $permit->type  : '' }}" name="type" id="type">
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="grey-text" for="ownerform">Form of Ownership</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->ownerform  : '' }}" name="ownerform" id="ownerform">
                </div>
      
            </div>
          </div>
            


          <h4 class="h4">Owner/Applicant Details</h4>
          <div class="row">
            <div class="col-md-3">

            <div class="form-group">
                <label class="grey-text" for="fname">First Name</label>
                <input type="text" class="form-control" value="{{ isset($permit) ? $permit->fname  : '' }}" name="fname" id="fname" required>
            </div>

            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label class="grey-text" for="lname">Last Name</label>
                <input type="text" class="form-control" value="{{ isset($permit) ? $permit->lname  : '' }}" name="lname" id="lname">
            </div>

            </div>
            <div class="col-md-1">
            <div class="form-group">
                <label class="grey-text" for="mi_name">M.I</label>
                <input type="text" class="form-control" value="{{ isset($permit) ? $permit->mi_name  : '' }}" name="mi_name" id="mi_name">
            </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="grey-text" for="tin">TIN</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->tin  : '' }}" name="tin" id="tin">
                </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                <label class="grey-text" for="email">Email</label>
                <input type="text" class="form-control" value="{{ isset($permit) ? $permit->email  : '' }}" name="email" id="email">
            </div>
            </div>

          </div>






            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="grey-text" for="address">Address</label>
                  <input type="text" class="form-control" value="{{ isset($permit) ? $permit->address  : '' }}" name="address" id="address">
                </div>
              </div>
              <div class="col-md-3">

                  <div class="form-group">
                    <label class="grey-text" for="barangay_id">Barangay</label>
                    <select class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id">
                    @foreach($barangays as $barangay)
                        <option value="{{ $barangay->id }}"
                        @if(isset($permit))
                            @if($barangay->id === $permit->barangay_id)
                                selected
                            @endif 
                        @endif > {{ $barangay->name}}

                    @endforeach
                    </select>
                  </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="grey-text" for="city">City</label>
                  <input type="text" class="form-control" value="Calapan" name="city" id="city" disabled>
               </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label class="grey-text" for="zipcode">Zip Code</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->zipcode  : '' }}" name="zipcode" id="zipcode">
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label class="grey-text" for="telephone">Telephone</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->telephone  : '' }}" name="telephone" id="telephone">
                  </div>
              </div>
            </div>

            <h4 class="h4">Location of Construction</h4>

            <div class="row">
              <div class="col-md-1">
                  <div class="form-group">
                    <label class="grey-text" for="loc_lot">Lot No.</label>
                    <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_lot  : '' }}" name="loc_lot" id="loc_lot">
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                    <label class="grey-text" for="loc_blk">Block No.</label>
                    <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_blk  : '' }}" name="loc_blk" id="loc_blk">
                  </div>
              </div>
              <div class="col-md-1">

              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <label class="grey-text" for="loc_street">Street</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label class="grey-text" for="loc_brgy">Barangay</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_brgy  : '' }}" name="loc_brgy" id="loc_brgy">
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label class="grey-text" for="tct">TCT</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->tct  : '' }}" name="tct" id="tct">
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label class="grey-text" for="taxdec">Tax Dec</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->taxdec  : '' }}" name="taxdec" id="taxdec">
                  </div>
              </div>
            </div>
            <h4 class="h4">Construction Details</h4>
            <div class="row">
                <div class="col-md-1">
                  <div class="form-group">
                      <label class="grey-text" for="storeys">storeys</label>
                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->storeys  : '' }}" name="storeys" id="storeys">
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                      <label class="grey-text" for="floorarea">floorarea</label>
                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->floorarea  : '' }}" name="floorarea" id="floorarea">
                  </div>
                </div>
                <div class="col-md-1">

                  <div class="form-group">
                      <label class="grey-text" for="cost">cost</label>
                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->cost  : '' }}" name="cost" id="cost">
                  </div>

                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label class="grey-text" for="image">image</label>
                      <input type="file" class="form-control" value="{{ isset($permit) ? $permit->image  : '' }}" name="image" id="image">
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                    <div class="form-group">
                      <label class="grey-text" for="scopesid">Scope</label>
                      <select class="form-control browser-default custom-selects" multiple='multiple' name="scopes[]" id="scopesid" class="sselector form-control" value="">
                          @foreach($scopes as $scope)
                              <option value="{{ $scope->id }}"
                                  @if(isset($permit))
                                      @if($permit->hasScope($scope->id))
                                          selected
                                      @endif
                                  @endif > {{ $scope->name}}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                      <label class="grey-text" for="occupantsid">Use of Occupancy</label>
                      <select class="form-control browser-default custom-selects" multiple='multiple' name="occupants[]" id="occupantsid" class="form-control" value="">
                          @foreach($occupants as $occupant)
                              <option value="{{ $occupant->id }}"
                                  @if(isset($permit))
                                      @if($permit->hasOccupant($occupant->id))
                                          selected
                                      @endif
                                  @endif > {{ $occupant->name}}</option>
                          @endforeach
                      </select>
                  </div>

              </div>
            </div>











            <div class="form-group">
                <button type="submit" class="btn btn-success">
                {{isset($permit) ? 'Update Request' : 'Create Requests' }}    
                </button>
            </div>

            



        </form>












































































































          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->


      </div>
      <!--Grid row-->



    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">



    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="" target="_blank"> Office of the Building Official - Calapan, Occidental Mindoro </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

    // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);

  </script>

  <script>
  // Material Design example
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>

</html>
