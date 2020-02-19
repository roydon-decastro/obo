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
            <li class="nav-item">
              <a class="nav-link waves-effect" href="{{ route('admins.index') }}">Home
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

          <div class="col-md-3 col-sm-6 col-6 mb-4">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header orange">

                        <!-- Title -->
                        <h2 class="card-header-title">{{$newpermits->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">New Permits</h4>

                    </div>

 

                </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 mb-4">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header green ">

                        <!-- Title -->
                        <h2 class="card-header-title">{{$processing->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">Permits Processing</h4>

                    </div>

                </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 mb-4">
                <div class="card card-cascade ">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header red darken-4">

                        <!-- Title -->
                        <h2 class="card-header-title">{{$immediates->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">For Immediate Action</h4>

                    </div>

                </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 mb-4">
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header primary-color-dark">

                        <!-- Title -->
                        <h2 class="card-header-title">{{$completed->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2">Completed</h4>

                    </div>


                </div>
          </div>


      </div>

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
                  <a href="{{ route('admins.create') }}" class="btn btn-warning btn-md">Create New Permit</a>
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

                <table id="dtBasicExample" class="table table-striped table-bordered table-responsive" cellspacing="0" >
                  <thead>
                      <tr>
                      <th class="th-sm font-weight-bold text-muted">ID</th>
                      <th class="th-sm font-weight-bold text-muted">Application ID</th>
                      <th class="th-sm font-weight-bold text-muted">Status</th>
                      <th class="th-sm font-weight-bold text-muted">Name</th>
                      <th class="th-sm font-weight-bold text-muted">Barangay</th>
                      <th class="th-sm font-weight-bold text-muted">Category</th>
                      <th class="th-sm font-weight-bold text-muted">TCT</th>
                      <th class="th-sm font-weight-bold text-muted">Tax Dec</th>
                      <th class="th-sm font-weight-bold text-muted">Telephone</th>
                      <th class="th-sm font-weight-bold text-muted">Edit</th>
                      <th class="th-sm font-weight-bold text-muted">Accept</th>
                      <th class="th-sm font-weight-bold text-muted">Email</th>
                      </tr>
                  </thead>
                  <tbody>

                          @foreach($permits as $permit)
                          <tr>
                              <td style="font-size:1.1rem">{{$permit->id}}</td>
                              <td style="font-size:1.1rem"><strong><a class="text-primary" href="{{route('admins.displaypermit', $permit->id)}}">  {{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</a></strong></td>
                              <td style="font-size:1.1rem">{{$permit->state->name}}</td>
                              <td style="font-size:1.1rem">{{$permit->fname}}  {{$permit->lname}}</td>
                              <td style="font-size:1.1rem">{{$permit->barangay->name}}</td>
                              <td style="font-size:1.1rem">{{$permit->category->name}}</td>
                              <td style="font-size:1.1rem">{{$permit->tct}}</td>
                              <td style="font-size:1.1rem">{{$permit->taxdec}}</td>
                              <td style="font-size:1.1rem">{{$permit->telephone}}</td>
                              <td  class="text-center"><a href="{{ route('permits.edit', $permit->id) }}" class="btn btn-info btn-sm text-white">Edit</a></td>
                              <td  class="text-center"> 
                                  
                                
                                  @if(!isset($permit->accepted_date))  
                                  <form action="{{ route('permits.acceptpermit', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn teal lighten-2 btn-sm">
                                        Accept
                                    </button>  
                                  </form>
                                  @else
                                  <form action="{{ route('permits.revokeacceptpermit', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn teal darken-2 btn-sm">
                                    {{ date('d-M-Y', strtotime($permit->accepted_date)) }}
                                    </button>  
                                  </form>
                                    
                                  @endif
                              </td>
                              <td class="text-center">
                                
                              @if(isset($permit->email))  
                                <form action="{{ route('mail.send', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn secondary-color-dark btn-sm">
                                    Email
                                    </button>  
                                </form>
                                  @endif  
                              </td>
                              

                          </tr>
                          @endforeach

                  </tbody>
                  <tfoot>
                      <tr>
                      <th class="font-weight-bold text-muted">ID</th>
                      <th class="font-weight-bold text-muted">Application ID</th>
                      <th class="font-weight-bold text-muted">Status</th>
                      <th class="font-weight-bold text-muted">Name</th>
                      <th class="font-weight-bold text-muted">Barangay</th>
                      <th class="font-weight-bold text-muted">Category</th>
                      <th class="font-weight-bold text-muted">TCT </th>
                      <th class="font-weight-bold text-muted">Tax Dec </th>
                      <th class="font-weight-bold text-muted">Telephone </th>
                      <th class="font-weight-bold text-muted">Edit</th>
                      <th class="font-weight-bold text-muted">Accept</th>
                      <th class="font-weight-bold text-muted">Email</th>
                      
                      </tr>
                  </tfoot>
              </table>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->


        </div>
      <!--Grid row-->

      <!--------------------------------------------------------------------------------------------------------------  -->
      
    </div>

      @if($immediates->count() > 0)

          <!-- Heading -->
          <div class="card mb-4 mt-5 wow fadeIn bg-danger">

              <!--Card content-->
              <div class="card-body d-sm-flex justify-content-between">
                <h3 class="h3 text-white">For Immediate Action</h3 class="h3">
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

              <table id="immediateTable" class="table table-striped table-bordered table-responsive" cellspacing="0" >
                  <thead>
                      <tr>
                        <th class="th-sm font-weight-bold text-muted">ID</th>
                      <th class="th-sm font-weight-bold text-muted">Application ID</th>
                      <th class="th-sm font-weight-bold text-muted">Status</th>
                      <th class="th-sm font-weight-bold text-muted">Name</th>
                      <th class="th-sm font-weight-bold text-muted">Barangay</th>
                      <th class="th-sm font-weight-bold text-muted">Category</th>
                      <th class="th-sm font-weight-bold text-muted">Email Address</th>
                      <th class="th-sm font-weight-bold text-muted">TCT</th>
                      <th class="th-sm font-weight-bold text-muted">Tax Dec</th>
                      <th class="th-sm font-weight-bold text-muted">Edit</th>
                      <th class="th-sm font-weight-bold text-muted">Accept</th>
                      <th class="th-sm font-weight-bold text-muted">Email</th>
                      </tr>
                  </thead>
                  <tbody>

                          @foreach($immediates as $immediate)
                          <tr>
                            <td class="font-weight-bold">{{$immediate->id}}</td>
                              <td class="font-weight-bold"><strong><a class="text-primary" href="{{route('admins.displaypermit', $immediate->id)}}">  {{substr($immediate->application_id,0,8) . "-" . substr($immediate->application_id,8,12)}}</a></strong></td>
                              <td class="font-weight-bold">{{$immediate->state->name}}</td>
                              <td class="font-weight-bold">{{$immediate->fname}}  {{$immediate->lname}}</td>
                              <td class="font-weight-bold">{{$immediate->barangay->name}}</td>
                              <td class="font-weight-bold">{{$immediate->category->name}}</td>
                              <td class="font-weight-bold">{{$immediate->email}}</td>
                              <td class="font-weight-bold">{{$immediate->tct}}</td>
                              <td class="font-weight-bold">{{$immediate->taxdec}}</td>
                              <td  class="text-center"><a href="{{ route('permits.edit', $immediate->id) }}" class="btn btn-info btn-sm text-white">Edit</a></td>
                              <td  class="text-center"> 
                                  
                                
                                  @if(!isset($immediate->accepted_date))  
                                  <form action="{{ route('permits.acceptpermit', $immediate->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn teal lighten-2 btn-sm">
                                        Accept
                                    </button>  
                                  </form>
                                  @else
                                  <form action="{{ route('permits.revokeacceptpermit', $immediate->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn teal darken-2 btn-sm">
                                    {{ date('d-M-Y', strtotime($immediate->accepted_date)) }}
                                    </button>  
                                  </form>
                                    
                                  @endif
                              </td>
                              <td class="text-center">
                                
                              @if(isset($immediate->email))  
                                <form action="{{ route('mail.send', $immediate->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn secondary-color-dark btn-sm">
                                    Email
                                    </button>  
                                </form>
                                  @endif  
                              </td>
                              

                          </tr>
                          @endforeach

                  </tbody>
                  <tfoot>
                      <tr>
                        <th class="font-weight-bold text-muted">ID</th>
                      <th class="font-weight-bold text-muted">Application ID</th>
                      <th class="font-weight-bold text-muted">Status</th>
                      <th class="font-weight-bold text-muted">Name</th>
                      <th class="font-weight-bold text-muted">Barangay</th>
                      <th class="font-weight-bold text-muted">Category</th>
                      <th class="font-weight-bold text-muted">Email Address</th>
                      <th class="font-weight-bold text-muted">TCT</th>
                      <th class="font-weight-bold text-muted">Tax Dec</th>
                      <th class="font-weight-bold text-muted">Edit</th>
                      <th class="font-weight-bold text-muted">Accept</th>
                      <th class="font-weight-bold text-muted">Email</th>
                      
                      </tr>
                  </tfoot>
              </table>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->


        </div>
      @endif
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
  // responsive: true
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
        "order": [[ 0, "desc" ]]
    });
    $('.dataTables_length').addClass('bs-select');
    });
  </script>


  <script>
  // Material Design example
  $(document).ready(function () {
    $('#immediateTable').DataTable({
        "order": [[ 0, "desc" ]]
    });
    $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <script>
  setTimeout(function() {
    $('.alert').fadeOut('fast');
  }, 8000);
</script>
</body>

</html>
