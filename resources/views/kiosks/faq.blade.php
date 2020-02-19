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

        
        .containerx {
            width: 100%;
            max-width: 98rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .timeline-heading{
            font-size: 2rem;
            text-align: center;
            text-transform: uppercase;
            margin-top:4rem;
            margin-bottom:4rem;
            color:rgba(0,0,0,0,.7);
        }

        .timeline-heading h1{
            font-family: 'Aldrich',sans-serif;
            font-size: 1.5rem;
            margin: .5rem 0 1rem;
        }

        .timeline {
            min-width: 300px;
            max-width: 500px;
            margin: auto;
        }

        .timeline p {
            font-size: 1rem;
            line-height: 1.75em;
            border-top: 3px solid;
            border-image: linear-gradient(to right, #743ad5 0%, #d53a9d 100%);
            border-image-slice: 1;
            border-width: 3px;
            margin: 0;
            padding: 40px;
            counter-increment: section;
            position: relative;
            color: #34435E;
        }

        .timeline p::before {
            content: counter(section);
            position: absolute;
            padding-right: 20px;
            padding-bottom: 15px;
            padding-top: 10px;
            padding-left: 10px;

            height: 1.5rem;
            width: 1.5rem;
            background-color: #34435E;
            text-align: center;
            line-height: .5rem;
            color: #ffffff;
            font-size: 1.8rem;
        }

        .timeline p:nth-child(odd) {
            border-right: 3px solid;
            padding-left: 0;
        }

        .timeline p:nth-child(odd)::before {
            left: 100%; 
            margin-left: -15px;
        }

        .timeline p:nth-child(even) {
            border-left: 3px solid;
            padding-right: 0;
        }

        .timeline p:nth-child(even)::before {
            right: 100%; 
            margin-right: -15px;
        }

        .timeline p:first-child {
            border-top: 0;
            border-top-right-radius:0;
            border-top-left-radius:0;
        }
        .timeline p:last-child {
            border-bottom-right-radius:0;
            border-bottom-left-radius:0;
        }

        

        .mini-menu {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .mini-menu a {
            background-color: #614ad3;
            color: white;
            margin-bottom: 1rem;
            padding: 20px;
            font-size: 1.8rem;
            text-align: center;
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
          

          .mini-menu {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                margin-bottom: 10rem;
            }

            .mini-menu a {
                margin: 5px;
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
            

            .mini-menu {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                margin-bottom: 10rem;
            }

            .mini-menu a {
                margin: 5px;
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
            <a class="nav-link" href="{{ url('/about#faq') }}">FAQ</a>
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

        <div class="containerx">

        <section class="begin-adventure">
                <div class="container pt-5">
                    <div class="title-heading text-center">
                        <h1>Frequently Asked Questions</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam earum nulla eum repellat! Saepe voluptas eius optio reiciendis. Animi.</p>
                    </div>

                    <div class="timeline-heading">
                        <h1 id="pow">Request for Program of Works</h1>
                    </div>
                    <div class="timeline">
                        <p>The client/applicant need to fill-up and submit the requirements. Then the service provider will check and review all the information indicated in the requisition slip then forward to Program Manager for Infrustructure. Person-in-Charge is the Frontliner/Admin Staff, it takes about 1min and no fees</p>
                        <p>Service Provider conducts preliminary inspection of the project done by Engineer in charge. Takes about 1 hour and no fees.</p>
                        <p>Service Provider conducts survey if necessary done by Engineer in charge. Takes about 3 hours and no fees.</p>
                        <p>Service Provider prepars plan, design and program of works done by Engineer in charge. Usually takes 7 days and no fees.</p>
                        <p>Service Provider checks and reviews POW. Done by City Engineer, Asst. City Engineer and Engineer IV. Takes 1 day and no fees</p>
                        <p>Service Provider records the POW, done by Lea Carpio, takes 1 min and no fees.</p>
                        <p>Client/applicant shall follow-up POW with CPDD. Service provider forwards POW to CPDD for dispatch, done by Dennis Madrigal. Takes 3 mins and no fees.</p>
                        <p>Engineers Assignment</p>
                    </div>
                    <div class="timeline-footer">
                        
                    </div>
                    <div class="timeline-heading">
                        <h1 id="tricycle">Request for Certificate of Road Worthiness for Tricycle Franchise</h1>
                    </div>
                    <div class="timeline">
                        <p>The client presents the required documents. The service provider then verifies the documents, done by Engr. Ronel Ronquilo. Takes 4 mins and no fees.</p>
                        <p>Service provider inspects the tricycle units as to compliance with road worthiness standard, done by Engr. Sherwin O R delos Reyes. Takes about 10 mins and no fees</p>
                        <p>Service provider signs Certificate of Road Worthiness. Done by Engr. Benjamin L. Acedera, takes 1 min and no fees.`</p>
                        <p>Client/Applicant claims Certificate of Road Worthiness. Service provider issues the said certificate, done by Engr. Romel Ronquilo. Takes about 1 min and no fees.</p>
                    </div>
                    
                    <div class="timeline-heading">
                        <h1 id="coc">Request for Certificate of Compliance(COC) for Business/Mayors Permit</h1>
                    </div>

                    <div class="timeline">
                        <p>The client/applicant presents required documents. Service Provider checks and verifies submitted documents. Person-in-charge is Lea Carpio. Takes 3 mins and no fees.</p>
                        <p>Service Provider verifies the Occupancy Permit. Done by Lea Carpio. Takes 1 min and no fees. </p>
                        <p>Client/Applicant claims the Certificate of Compliance. Service Provider releases COC. Done by Engr. Ronel Ronquillo. Takes 1 min and no fees. </p>
                        <p>Required Documents</p>
                    </div>

                    <div class="timeline-heading">
                        <h1 id="occupancy">Application for Occupancy Permit</h1>
                    </div>
                    <div class="timeline">
                        <p>Client/Applicant will fill-up application form from CEPWD/OBO and submit the accomplished form together will all other required documents to CEPWD/OBO. Service Provider checks and reviews submitted forms and documents, conducts inspection, evaluation, processing and approval. For Reviewing - Engr. Romel Ronquillo. For Inspection and Evaluation - Engr. Pamfilo Buela, For Appoval - Engr. Benjamin L. Acedera. Takes 4 days and no fees. </p>
                        <p>Client/Applicant secures the order of payment from CEPWD/OBO duly approved by the Building official and pay the indicated amount at the city Treasurer's Office. Service Provider issues order of payment and inform the customer on the findings based submitted applications form and other submitted documents. Engr. Pamfilo Buela for Order of Payment. Engr. Benjamin L. Acedera for appproval of Order of Payment. Takes 1 day and fees are scheduled amount set forth by the NBC </p>
                        <p>Client/Applicant claims Occupancy permit. Service Provider records/releases Occupancy Permit. Engr. Romel M. Ronquillo is Person-in-charge. Takes 10mins and no fees. </p>
                        <p><span style="color:red">For application with lacking requirements</span> <span class="text-muted"> Client/Applicant shall follow step 1 and complete and submit the lacking requirements and present the official receipt to CEPWD/OBO then proceed to Step 3. Service Provider reviews the submitted documents based on issued findings and checks the official receipt. Done by Engr. Romel Ronquillo. Takes 3 days.</span></p>
                    </div>                
                    <div class="timeline-heading">
                        <h1 id="bldg">Application for Building Permit</h1>
                    </div>
                    <div class="timeline">
                        <p>Client/Applicant will fill-up notarized application form from CEPWD/OBO and submit the accomplished form together with all other required documents to CEPWD/OBO. Service Provider checks and reviews submitted forms and documents, conducts inspection, evaluation, processing and approval. Engr. Ronel Ronquillo - Checking and Reviewing, Engr. Pamfilo Buela - Inspection and Evaluation, Benjamin L. Acedera - Approval. Takes 4 days and no fees. </p>
                        <p>Client/Applicant secure the order of payment from the CEPWD/OBO duly signed by the Building Official and pay the corresponding amount at the city Treasurer's Office. Service Provider issue order of payment and inform the customer on the findings based submitted applications form and other submitted documents. Engr. Pamfilo Buela - Order of Payment. Engr. Benjamin L. Acedera - Approval of Order of Payment. Takes 1 day and fees scheduled amount set forth by the NBC. </p>
                        <p>Client/Applicant Receives building permit. Service Provider records/releases Building Permit. Done by Engr. Romel Ronquillo. Takes 10mins and no fees. </p>
                        <p><span style="color:red">For application with lacking requirements</span> Client/Applicant shall follow step 1 and complete and submit the lacking requirements and present the official receipt to CEPWD/OBO then proceed to Step 3. Service Provider reviews the submitted documents based on issued findings and checks the official receipt. Done by Engr. Romel Ronquillo. Takes 3 days.</p>
                    </div>
                </div>
            </section>

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
