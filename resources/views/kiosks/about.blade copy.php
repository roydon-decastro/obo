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
        .butones {
            /* background-color: #303c6c; */
            background-color: #204969;
        }

        .butones-nav {
            background-color: #303c6c;
            /* background-color: #8806ce; */
        }

        .mytextcolor {
            /* color: #fcf594; */
            /* color: #fcfdd8; */
            color: #fbfad3;
        }

       


        </style>

            
    </head>
    <body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark butones-nav fixed-top">
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
                    <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kiosk.about')}}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#faqhead">FAQ</a>
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

        <header>
                    <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(/images/architect.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text wow fadeInDown" data-wow-delay="0.3s">Oriental Mindoro </h1>
                            <h1 class="display-3 white-text mb-5 font-weight-bold">Office of the Building Official</h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s"> </h5>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </header>
        </header>
        
        <main>

<div class="container">

    <!-- Section: Team v.3 -->
    <section class="text-center wow fadeIn" data-wow-delay="0.3s">
        <h1 class="display-3 my-5 ">Mission</h1>
        <h2 class="h2-responsive text-muted "> <em> The City of Calapan shall initiate and sustain programs to create an environment conducive to development and progress through transparent and paticipatory governance.</em></h2>
    </section>
    <hr class="my-5">






    <section class="text-center wow fadeIn" data-wow-delay="0.3s">
        <h1 class="text-center display-4 my-5" id="faqhead">FAQ</h1>
        <!-- Section description -->
        <p class="text-center grey-text mb-5 mx-auto w-responsive lead">Please see the following steps for application of permits.</p>


    </section>

    <section  class="bodytimeline" >
        <h2 class="text-center font-weight-bold" id="pow">Request for Program of Works</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div id="faq">
                <div class="timeline">
                        <p>1. The client/applicant need to fill-up and submit the requirements. Then the service provider will check and review all the information indicated in the requisition slip then forward to Program Manager for Infrustructure. Person-in-Charge is the Frontliner/Admin Staff, it takes about 1min and no fees</p>
                </div>
                <div class="timeline">
                <p>2. Service Provider conducts preliminary inspection of the project done by Engineer in charge. Takes about 1 hour and no fees.</p>
                </div>
                <div class="timeline">
                <p>3. Service Provider conducts survey if necessary done by Engineer in charge. Takes about 3 hours and no fees.</p>
                </div>
                <div class="timeline">
                    <p>4. Service Provider prepars plan, design and program of works done by Engineer in charge. Usually takes 7 days and no fees.</p>
                </div>
                <div class="timeline">
                    <p>5. Service Provider checks and reviews POW. Done by City Engineer, Asst. City Engineer and Engineer IV. Takes 1 day and no fees</p>
                </div>
                <div class="timeline">
                    <p>6. Service Provider records the POW, done by Lea Carpio, takes 1 min and no fees.</p>
                </div>
                <div class="timeline">
                    <p>7. Client/applicant shall follow-up POW with CPDD. Service provider forwards POW to CPDD for dispatch, done by Dennis Madrigal. Takes 3 mins and no fees.</p>
                </div>
                <div class="timeline">
                    <p>Engineers Assignment</p>
                    <ul>
                        <li>Engr. Amormio JA S. Benter - Drainage</li>
                        <li>Engr. Jenalyn Ramirez - Roads</li>
                        <li>Engr. Moss L. Simbahan - Buildings</li>
                        <li>Engr Pamfilo Buela - Electrical</li>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
        </div>

    </section>
    <hr class="my-5">

    <section  class="bodytimeline" >
        <h2 class="text-center font-weight-bold" id="pow">Request for Certificate of Road Worthiness for Tricycle Franchise</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="faq">
                    <div class="timeline">
                        <p>1. The client presents the required documents. The service provider then verifies the documents, done by Engr. Ronel Ronquilo. Takes 4 mins and no fees.</p>
                    </div>
                    <div class="timeline">
                        <p>2. Service provider inspects the tricycle units as to compliance with road worthiness standard, done by Engr. Sherwin O R delos Reyes. Takes about 10 mins and no fees</p>
                    </div>
                    <div class="timeline">
                        <p>3. Service provider signs Certificate of Road Worthiness. Done by Engr. Benjamin L. Acedera, takes 1 min and no fees.`</p>
                    </div>
                    <div class="timeline">
                        <p>4. Client/Applicant claims Certificate of Road Worthiness. Service provider issues the said certificate, done by Engr. Romel Ronquilo. Takes about 1 min and no fees.</p>
                    </div>
                    <div class="timeline">
                        <p>Required Documents</p>
                        <ul>
                            <li>Photocopies of Official Receipt</li>
                            <li>Certificate of Registratioin</li>
                            <li>Brgy. Clearance</li>
                            <li>Cedula</li>
                            <li>BPLS Application documents</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>

    </section>
    <hr class="my-5">

    <section  class="bodytimeline" >
        <h2 class="text-center font-weight-bold" id="pow">Request for Certificate of Compliance(COC) for Business/Mayors Permit.</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="faq">
                    <div class="timeline">
                        <p>1. The client/applicant presents required documents. Service Provider checks and verifies submitted documents. Person-in-charge is Lea Carpio. Takes 3 mins and no fees.</p>
                    </div>
                    <div class="timeline">
                    <p>2. Service Provider verifies the Occupancy Permit. Done by Lea Carpio. Takes 1 min and no fees. </p>
                    </div>
                    <div class="timeline">
                    <p>3. Client/Applicant claims the Certificate of Compliance. Service Provider releases COC. Done by Engr. Ronel Ronquillo. Takes 1 min and no fees. </p>
                    </div>
                    <div class="timeline">
                        <p>Required Documents</p>
                        <ul>
                            <li>Photocopy of Approved Certificate of Occupancy</li>
                            <li>BPLS application documents</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </section>

    <hr class="my-5">

    
    <section  class="bodytimeline" >
        <h2 class="text-center font-weight-bold" id="pow">Application for Occupancy Permit.</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div id="faq">
            <div class="timeline">
                <p>1. Client/Applicant will fill-up application form from CEPWD/OBO and submit the accomplished form together will all other required documents to CEPWD/OBO. Service Provider checks and reviews submitted forms and documents, conducts inspection, evaluation, processing and approval. For Reviewing - Engr. Romel Ronquillo. For Inspection and Evaluation - Engr. Pamfilo Buela, For Appoval - Engr. Benjamin L. Acedera. Takes 4 days and no fees. </p>
            </div>
            <div class="timeline">
            <p>2. Client/Applicant secures the order of payment from CEPWD/OBO duly approved by the Building official and pay the indicated amount at the city Treasurer's Office. Service Provider issues order of payment and inform the customer on the findings based submitted applications form and other submitted documents. Engr. Pamfilo Buela for Order of Payment. Engr. Benjamin L. Acedera for appproval of Order of Payment. Takes 1 day and fees are scheduled amount set forth by the NBC </p>
            </div>
            <div class="timeline">
            <p>3. Client/Applicant claims Occupancy permit. Service Provider records/releases Occupancy Permit. Engr. Romel M. Ronquillo is Person-in-charge. Takes 10mins and no fees. </p>
            </div>
            <div class="timeline">
            <p><span style="color:red">For application with lacking requirements</span> <span class="text-muted"> Client/Applicant shall follow step 1 and complete and submit the lacking requirements and present the official receipt to CEPWD/OBO then proceed to Step 3. Service Provider reviews the submitted documents based on issued findings and checks the official receipt. Done by Engr. Romel Ronquillo. Takes 3 days.</span></p>
            </div>
            <div class="timeline text-muted">
                <ul class="nobullet">
                    <li>Forms and supporting documents must be signed and sealed by licensed professionals</li>                
                    <li>NBC - National Building Code</li>
                    <li>Note: Processing Time as per NBC is within thirty (30) days after receipt of OR.</li>
                </ul>
            </div>
        </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </section>

    <hr class="my-5">

    
    <section  class="bodytimeline" style="margin-bottom: 250px;" >
        <h2 class="text-center font-weight-bold" id="pow">Application for Building Permit</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="faq">
                    <div class="timeline">
                        <p>1. Client/Applicant will fill-up notarized application form from CEPWD/OBO and submit the accomplished form together with all other required documents to CEPWD/OBO. Service Provider checks and reviews submitted forms and documents, conducts inspection, evaluation, processing and approval. Engr. Ronel Ronquillo - Checking and Reviewing, Engr. Pamfilo Buela - Inspection and Evaluation, Benjamin L. Acedera - Approval. Takes 4 days and no fees. </p>
                    </div>
                    <div class="timeline">
                    <p>2. Client/Applicant secure the order of payment from the CEPWD/OBO duly signed by the Building Official and pay the corresponding amount at the city Treasurer's Office. Service Provider issue order of payment and inform the customer on the findings based submitted applications form and other submitted documents. Engr. Pamfilo Buela - Order of Payment. Engr. Benjamin L. Acedera - Approval of Order of Payment. Takes 1 day and fees scheduled amount set forth by the NBC. </p>
                    </div>
                    <div class="timeline">
                    <p>3. Client/Applicant Receives building permit. Service Provider records/releases Building Permit. Done by Engr. Romel Ronquillo. Takes 10mins and no fees. </p>
                    </div>
                    <div class="timeline">
                    <p><span style="color:red">For application with lacking requirements</span> Client/Applicant shall follow step 1 and complete and submit the lacking requirements and present the official receipt to CEPWD/OBO then proceed to Step 3. Service Provider reviews the submitted documents based on issued findings and checks the official receipt. Done by Engr. Romel Ronquillo. Takes 3 days.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>




</div>

</main>
<script>
        new WOW().init();

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

    </script>

    </body>
</html>
