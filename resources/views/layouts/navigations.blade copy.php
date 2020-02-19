<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ACP Express</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" ></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 

</head>

<body class="grey lighten-2">
<nav class="navbar navbar-expand-lg navbar-dark unique-color fixed-top">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/images/Calapan_City_Logo.png" height="40" class="d-inline-block align-top"
        alt="mdb logo">
      </a>
      <a class="navbar-brand" href="{{ route('admins.index') }}">ACP Express Admin</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admins.create') }}">New Permit
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admins.searchpermits') }}">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">Staff</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Tables</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('barangays.index') }}">Barangay</a>
              <a class="dropdown-item" href="{{ route('states.index') }}">Status</a>
              <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
              <a class="dropdown-item" href="{{ route('scopes.index') }}">Scope of Work</a>
              <a class="dropdown-item" href="{{ route('occupants.index') }}">Use/Character of Occupancy</a>
            </div>
          </li>

        </ul>
        <!-- Links -->

        <ul class="navbar-nav">
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
      <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->

<div class="container py-4 px-3 my-5">

  <div class="row my-3">
      <div class="col-lg-8" >
          <div class="card card-default">
              <div class="card-header blue lighten-1 white-text">
                Add Barangay
              </div>
              <div class="card-body">
                  @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                            {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  @if(auth()->user()->isAdmin())
                    <form action="{{ isset($barangay) ? route('barangays.update', $barangay->id) : route('barangays.store')}}" method="POST">
                        @csrf
                        @if(isset($barangay))
                        @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ isset($barangay) ? $barangay->name : '' }}"> 
                        </div>
                        <div class="form-group">
                            <button class="btn pink">
                            {{ isset($barangay) ? 'Edit Barangay' : 'Add Barangay' }}
                            </button>
                        </div>
                    </form>
                  @endif
              </div>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-12">
          <div class="card card-default">
              <div class="card-header blue lighten-1 white-text">
                Barangays List
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0">
                      <thead>
                          <th>Name</th>
                          <th>Permits Count</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          @foreach($barangays as $barangay)
                          <tr>
                              <td>
                                  {{$barangay->name}}
                              </td>
                              <td>
                                  {{$barangay->permits->count()}}
                              </td>
                              @if(auth()->user()->isAdmin())
                              <td>
                                  <a href="{{ route('barangays.edit', $barangay->id) }}" class="btn btn-info btn-sm">Edit</a>
                              </td>
                              <td>
                                  <button class="btn btn-danger btn-sm mx-2" onclick="handleDelete({{ $barangay->id }})">Delete</button>
                              </td>
                              @endif
                          </tr>
                          @endforeach                    
                      </tbody>
                  </table>
              </div>
              </div>
          </div>
    </div>
  </div>
</div>


        <!------------------------------------------------ MODAL -------------------------------------------->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form action="" method="POST" id="deletebarangayForm">
                @method('DELETE')
                @csrf
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Barangay</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Are you sure you want to delete this Barangay?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No. Go back</button>
                            <button type="submit" class="btn btn-danger">Yes. Delete</button>
                        </div>
                    </div>
            </form>
            </div>
        </div>


        <!------------------------------------------------ MODAL -------------------------------------------->

<!-- Footer -->
<footer class="page-footer font-small unique-color mt-5">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/">Office of the Building Official.  Oriental Mindoro </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
        function handleDelete(id) {
            var form = document.getElementById('deletebarangayForm')
            form.action = '/barangays/' + id
            console.log('deleting ' , form);
            $('#deleteModal').modal('show')
        }
</script>
<script>

$(document).ready(function () {
  $('#dtBasicExample').DataTable({
      "order": [[ 0, "desc" ]],
      "responsive": true
  });
  $('.dataTables_length').addClass('bs-select');
  });
</script>
</body>

</html>