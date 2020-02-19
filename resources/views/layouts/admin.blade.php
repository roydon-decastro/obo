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


      <div class="row mb-4">

          <div class="col-md-3 col-sm-6  mb-2">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header cyan">

                        <!-- Title -->
                        <h2 class="card-header-title">{{$permits->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">New Permits</h4>

                    </div>

 

                </div>
          </div>
          <div class="col-md-3 col-sm-6  mb-2">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header mdb-color ">

                        <!-- Title -->
                        <h2 class="card-header-title">12</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">Permits Processing</h4>

                    </div>

                </div>
          </div>
          <div class="col-md-3  col-sm-6  mb-2">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header primary-color-dark">

                        <!-- Title -->
                        <h2 class="card-header-title">12</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">Total Permits for 2019</h4>

                    </div>


                </div>
          </div>
          <div class="col-md-3  col-sm-6 mb-2">
                <div class="card card-cascade ">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header red darken-4">

                        <!-- Title -->
                        <h2 class="card-header-title">3</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">For Immediate Action</h4>

                    </div>

                </div>
          </div>

      </div>

            <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Permits</span>
            <span>/</span>
            <span>All</span>
        </h4>

        <div class="justify-content-end ">
            <a href="{{ route('permits.create') }}" class="btn btn-success btn-md">Add Permit Request</a>
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

            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">ID</th>
                    <th class="th-sm">Type</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Barangay</th>
                    <th class="th-sm">Category</th>
                    <th class="th-sm">Action</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach($permits as $permit)
                        <tr>
                            <td>{{$permit->id}}</td>
                            <td>{{$permit->type}}</td>
                            <td>{{$permit->state->name}}</td>
                            <td>{{$permit->fname}}  {{$permit->lname}}</td>
                            <td>{{$permit->barangay->name}}</td>
                            <td>{{$permit->category->name}}</td>
                            <td style="text-align:center"> <a href="{{ route('permits.edit', $permit->id) }}" class="btn btn-info btn-sm">Edit</a>  </td>

                        </tr>
                        @endforeach

                </tbody>
                <tfoot>
                    <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Barangay</th>
                    <th>Category</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
            </table>

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
    $('#dtBasicExample').DataTable({
        "order": [[ 0, "desc" ]]
    } );
    $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>

</html>
