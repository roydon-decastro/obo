<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ACP Express</title>
  <link rel="icon" href="/images/Calapan_City_Logo.png">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" ></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="https://kit.fontawesome.com/70018f60da.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<style>

.tabi-nav {
  visibility: hidden;
  margin: 0;
  padding: 0;
  width:0;
  height: 0;
  box-sizing: border-box;
}


  /* Large devices (desktops, 992px and up) */
@media (min-width: 992px) { 

  .tabi-nav {
  visibility: visible;
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #032535;
  overflow-x: hidden;
  padding-top: 70px;
  color: white;
  transition: 0.5s;
  box-sizing: border-box;
  
}

.tabi-nav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: .8rem;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.tabi-nav p {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: .6rem;
  color: #a6e3e9;
  display: block;
  transition: 0.3s;
  background-color: #1b1919;
}

.tabi-nav a:hover {
  color: #ffb400;
  background-color: #042f4b;
  border-left: 3px solid #ffb400;
  padding-left:50px; 
}
.active 
{
  color: #f1f1f1;
  background-color: #042f4b;
  border-left: 5px solid #badfdb;
}
}
</style>

</head>

<body class="grey lighten-2 pt-5">
<nav class="navbar navbar-expand-lg navbar-dark unique-color fixed-top">

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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admins.create') }}">New Permit
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admins.searchpermits') }}">Reports</a>
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

</nav>
<!--/.Navbar-->

<div class="tabi-nav" id="tabi-nav-id">
  <p><i class="fa fa-lock" aria-hidden="true"></i> ADMIN</p>
  <a href="{{ route('admins.index') }}" class="btnx"><i class="fas fa-home"></i> Home</a>
  <a href="{{ route('admins.create') }}" class="btnx"><i class="fas fa-file-powerpoint"></i> New Permit</a>
  <a href="{{ route('admins.searchpermits') }}" class="btnx"><i class="fas fa-search"></i> Reports</a>
  <a href="{{ route('users.index') }}" class="btnx"><i class="fas fa-users"></i> Staff</a>
  <p><i class="fa fa-table" aria-hidden="true"></i> TABLES</p>
  <a href="{{ route('barangays.index') }}" class="btnx"><i class="far fa-circle"></i> Barangays</a>
  <a href="{{ route('categories.index') }}" class="btnx"><i class="far fa-circle"></i> Categories</a>
  <a href="{{ route('states.index') }}" class="btnx"><i class="far fa-circle"></i> Status</a>
  <a href="{{ route('scopes.index') }}" class="btnx"><i class="far fa-circle"></i> Scope of Work</a>
  <a href="{{ route('occupants.index') }}" class="btnx"><i class="far fa-circle"></i> Use/Character of Occupancy</a>
  <p><i class="fa fa-paperclip" aria-hidden="true"></i> PUBLIC PAGES</p>
  <a href="{{ url('/') }}" class="btnx"><i class="fas fa-search"></i> Kiosk</a>
  <a href="{{ url('/about') }}" class="btnx"><i class="fas fa-users"></i> About Us</a>
  <a href="{{ url('/faq') }}" class="btnx"><i class="fas fa-folder-open"></i> FAQ</a>
</div>

@yield('content')

<!-- Footer -->
<footer class="page-footer font-small unique-color mt-5" style="z-index:2">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/">Office of the Building Official.  Oriental Mindoro </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


@yield('js')
<script>

$(document).ready(function () {
  $('#dtBasicExample').DataTable({
      "order": [[ 0, "asc" ]],
      "responsive": true
  });
  $('.dataTables_length').addClass('bs-select');
  
  });
</script>
<script type="text/javascript">

$('.date').datepicker({  

   format: 'mm-dd-yyyy'

 });  

</script>  

</body>

</html>