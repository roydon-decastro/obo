<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Office of the Building Official</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
        <style>
        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: inherit;
        }
        
        html {
            font-family: 'Nunito', sans-serif;
            font-size:10px;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        a {
            text-decoration: none;
        }
        ul {
            list-style: none;
        }
        p{
            font-size:1.6rem;
        }
        img {
            width: 100%;
            max-width:100%;
            height: auto;
        }
        section {
            padding: 5rem 0;
        }
        /* body{
            background-color: cornflowerblue;
        } */

        header {
            width: 100%;
            height: 5rem;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .container {
            width: 100%;
            max-width: 98rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        nav {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,.2);
            
        }

        .nav-brand {
            width:4rem;
        }
        .menu-icons i {
            font-size:3.5rem;
            color: #fafafa;
            cursor:pointer;
        }

        .close i {
            color: #eb648c;

        }

        .nav-list {
            width: 25rem;
            height:100vh;
            background-color: #d7d4ed;
            position: fixed;
            top: 0;
            right: -26rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1500;
            transition: all 650ms ease-in-out;
        }

        .nav-list.active {
            right: 0;
        }

        .close {
            position: absolute;
            top: 1rem;
            left:1.5rem;
        }

        .nav-item{
            margin: 1.5rem 0;
        }

        .nav-link {
            font-size: 1.6rem;
            text-transform: uppercase;
            color: rgba(0, 0, 0, .71);
        }

        .hero {
            width:100%;
            height:80vh;
            /* background: linear-gradient(135deg, rgba(49,24,131,.9) 0%, rgba(72,56,149,0.8) 100%), url("/images/cityhall.jpg") center no-repeat; */
            background: linear-gradient(135deg, rgba(58,123,213,.9) 0%, rgba(109,213,237,0.8) 100%), url("/images/cityhall.jpg") center no-repeat;
            background-size: cover;
            position: relative;

        }

        .hero::before{
            content: "";
            position: absolute;
            left: 0;
            bottom:-3px;
            width: 100%;
            height: 4.7rem;
            background: url("/images/wave-small.png") center no-repeat;
            background-size: cover;
        }

        .biglogo {
            visibility: hidden;
        }

        
        .main-grid {
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            grid-gap: 2.5rem;
            margin-bottom:2rem;
        
        }

        .main-grid-item p {
            color: #fafafa;
        }

        .main-message {
            width: 100%;
            max-width: 50rem;
            color: #fdfdf6;
            text-transform: uppercase;
            transform: translateY(20%);
        }

        .main-message h3 {
            font-size: 1.4rem;
        }

        .main-message h1 {
            font-family: 'Aldrich', sans-serif;
            font-size: 3rem;
            margin: 1rem 0;
        }

        .main-message p {
            text-transform: lowercase;
            color: #fdfdf6;

        }
        
        .main-p {
            color: #032535;
        }

        .btn {
            background-color: #eb648c;
            border-radius: 2rem;
            color: #fafafa;
            display: inline-block;
            margin-top: 2rem;
            padding: 1rem 2.5rem;
            text-transform: uppercase;
            transition: background-color 650ms;

        }

        .btn:hover {
            background-color: #ce587b;
        }

        .experience-outdoors {
            padding: 0;
        }
        .title-heading{
            text-align: center;
            text-transform: uppercase;
            margin-bottom:10rem;
            color:rgba(0,0,0,0,.7);
        }

        .title-heading h3{
            font-size:1.4rem;
        }

        .title-heading h1{
            font-family: 'Aldrich',sans-serif;
            font-size: 2rem;
            margin: .5rem 0 1rem;
        }
        .title-heading p {
            text-transform: lowercase;
        }

        .activities-grid {
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            grid-gap: 2.5rem;
        
        }

        .activities-grid-item {
            height: 40rem;
            padding:5rem;
            color:#fafafa;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            cursor:pointer;
            z-index: 1;

        }

        .activities-grid-item::before {
            content: "";
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-image: linear-gradient(135deg, rgba(49,24,131,.9) 0%, rgba(72,56,149,0.8) 100%); */
            background-image: linear-gradient(135deg, rgba(58,123,213,.9) 0%, rgba(109,213,237,0.8) 100%);
            z-index: -1;
        }

        .star-gazing {
           background: url("/images/image1.jpg") center no-repeat;
        }

        .hiking {
           background: url("/images/image2.jpg") center no-repeat;
        }

        .camping {
           background: url("/images/image3.jpg") center no-repeat;
        }

        .activities-grid-item i {
            font-size: 4rem;
            color:#eb648c;
        }

        .activities-grid-item h1{
            font-family: 'Aldrich', sans-serif;
            font-size:1.7rem;
            text-transform: uppercase;
            margin:2rem 0;
        }

        .testimonials {
            width:100%;
            height:80vh;
            /* background: linear-gradient(135deg, rgba(49,24,131,.9) 0%, rgba(72,56,149,0.8) 100%), url("/images/testimonials-bg.jpg") center no-repeat fixed; */
            background: linear-gradient(135deg, rgba(58,123,213,.9) 0%, rgba(109,213,237,0.8) 100%), url("/images/testimonials-bg.jpg") center no-repeat fixed;
            background-size: cover;
            position: relative;

        }

        .testimonials::before {
            content: "";
            position: absolute;
            top:-3px;
            left: 0;
            width: 100%;
            height: 4.7rem;
            background: url("/images/wave-small-reversed.png") center no-repeat;
            background-size: cover;
        }

        
        .testimonials::after {
            content: "";
            position: absolute;
            bottom:-3px;
            left: 0;
            width: 100%;
            height: 4.7rem;
            background: url("/images/wave-small.png") center no-repeat;
            background-size: cover;
        }

        .testimonial {
            width:100%;
            color:#fafafa;
            position: absolute;
            top:55%;
            left:50%;
            transform: translate(-50%, -50%);
            text-align:center;
        }

        .testimonial-text-box {
            padding: 0 1.5rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .testimonial-text-box p {
            font-size: 1.8rem;
        }
        .testimonial-text-box i{
            position: absolute;
            top: -8rem;
            left:50%;
            transform: translateX(-50%);
            font-size: 8rem;
            color:#eb648c;
            opacity:.5;
            z-index:-1;
        }

        .testimonial-customer img{
            width:10rem;
            height:10rem;
            border-radius:100%;
            border: 3px solid #eb648c;
        }

        .testimonial-customer h1 {
            font-size:1.8rem;
        }

        /* .begin-adventure {
            width:100%;
            position: relative;
        }

        .begin-adventure::before {
            content: "";
            position: absolute;
            top:-44px;
            left: 0;
            width: 100%;
            height: 4.7rem;
            background: url("/images/wave-small.png") center no-repeat;
            background-size: cover;
        } */


        .adventure-grid {
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            grid-gap: 2.5rem;
            margin-bottom:2rem;
        
        }

        .adventure-grid-item p {
            color: rgba(0,0,0,0.7);
        }

        .mini-menu {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .mini-menu a {
            background-color: #2193b0;
            color: white;
            margin-bottom: 1rem;
            padding: 20px;
            font-size: 1.8rem;
            text-align: center;
        }

        .timeline-heading{
            font-size: 2rem;
            text-align: center;
            text-transform: uppercase;
            margin-top:10rem;
            margin-bottom:10rem;
            color:rgba(0,0,0,0,.7);
        }

        .timeline-heading h1{
            font-family: 'Aldrich',sans-serif;
            font-size: 3rem;
            margin: .5rem 0 1rem;
        }

        .timeline {
            min-width: 300px;
            max-width: 500px;
            margin: auto;
        }

        .timeline p {
            font-size: 1.4em;
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

        .back-to-menu {
            margin: auto;
            font-size: 2rem;

        }

        footer {
            padding:2.5rem 0;
            background-color: #d7d4ed;
            text-align:center;
            color: rgba(0, 0, 0, 0.7);
        }

        @media screen and (min-width: 350px) {
            .main-message {
                transform: translateY(40%);

            }
        }

        
        @media screen and (min-width: 470px) {
           .hero::before{
               height: 9.4rem;
               background: url("/images/wave-medium.png");
               background-size: cover;
           }

           .testimonials::before{
               height: 9.4rem;
               background: url("/images/wave-medium-reversed.png");
               background-size: cover;
           }

        }

        @media screen and (min-width: 700px) {

            header {
                height: 8rem;
            }

            .nav-brand {
                width:3.5rem;
            }

            .nav-list {
                width: initial;
                height: initial;
                background-color: transparent;
                position: initial;
                top: initial;
                right: initial;
                flex-direction: row;
                transition: initial;
            }

            .menu-icons {
                display: none;
            }

            .nav-item {
                margin: 0 2.5rem;
            }

            .nav-link,
            .current {
                color: #fafafa;
                position:relative;
                font-size: 1.3rem;
            }

            .nav-link::before,
            .current::before {
                content: "";
                position:absolute;
                left:0;
                bottom: -.5rem;
                background-color: #eb648c;
                width: 100%;
                height:2px;
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 650ms;
            }

            .current::before {
                transform: scaleX(1)
            }

            .nav-link:hover::before {
                transform:scaleX(1);
            }

            .hero {
                height: 60vh;
            }

            .main-message {
                transform: translateY(50%);

            }

                
            .biglogo {
                visibility: visible;
                width: 50%;
                height:50%;
                transform: translateY(100%) translateX(50%);

            }

            .title-heading h1 {
                font-size: 2.5rem;
            }

            .testimonial-text-box p {
                font-size: 2.5rem;
            }
                
            .testimonial-customer img{
                width:20rem;
                height:20rem;
                border-radius:100%;
                border: 3px solid #eb648c;
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

        @media screen and (min-width: 950px) {
            .hero::before{
               height: 22.7rem;
               background: url("/images/wave-large.png");
               background-size: cover;
           }

           .testimonials {
               height: 100vh;
           }

           .testimonials::before{
               height:22.7rem;
               background: url("/images/wave-large-reversed.png");
               background-size: cover;
           }

           .testimonials::after{
               height:22.7rem;
               background: url("/images/wave-large.png");
               background-size: cover;
           }


           .nav-brand {
            width:5rem;
            }
           

        }



        @media screen and (min-width: 950px) {

            .hero {
                height: 90vh;
            }

        }






</style>


            
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <div class="nav-brand">
                        <a href="index.html">
                            <img src="/images/Calapan_City_Logo.png" alt="">
                        </a>
                    </div>
                    <div class="menu-icons open">
                        <i class="icon ion-md-menu"></i>
                    </div>
                    <ul class="nav-list">
                        <div class="menu-icons close">
                            <i class="icon ion-md-close"></i>
                        </div>
                        <li class="nav-item">
                            <a href="" class="nav-link current">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>

            <section class="hero">
                <div class="container">
                    <div class="main-grid">
                        <div class="main-grid-item">
                            <div class="main-message">
                                <h3>The Office of the Building Official</h3>
                                <h1>Acquistion of Construction Permit EXPRESS</h1>
                                <p class="main-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium eaque qui nihil, voluptate commodi molestiae explicabo optio nam consequatur harum illum dolorem amet ab et quo ad quisquam error?</p>
                                <div class="cta">
                                    <a href="" class="btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-grid-item">
                            <div class="biglogo">
                                <img src="/images/Calapan_City_Logo.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="experience-outdoors">
                <div class="container">
                    <div class="title-heading">
                        <h3>Experience</h3>
                        <h1>The thrilling outdoors</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam earum nulla eum repellat! Saepe voluptas eius optio reiciendis. Animi.</p>
                    </div>

                    <div class="activities-grid">
                        <div class="activities-grid-item star-gazing">
                            <i class="icon ion-md-star"></i>
                            <h1>Star gazing</h1>
                            <p> Aliquam minima cupiditate, omnis similique nesciunt quis labore eaque in commodi fugiat?</p>
                        </div>

                        <div class="activities-grid-item hiking">
                            <i class="icon ion-md-compass"></i>
                            <h1>Hiking</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam minima cupiditate, omnis similique nesciunt quis labore eaque in commodi fugiat?</p>
                        </div>

                        <div class="activities-grid-item camping">
                            <i class="icon ion-md-bonfire"></i>
                            <h1>Camping</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam minima cupiditate, omnis similique nesciunt quis labore eaque in commodi fugiat?</p>
                        </div>
                    </div>

                </div> <!--container -->
            </section>

            <section class="testimonials">
                <div class="container">
                    <div class="testimonial">
                        <div class="testimonial-text-box">
                            <p>We have to look to the future. Better system means better service.</p>
                            <i class="icon ion-md-quote"></i>
                        </div>
                        <div class="testimonial-customer">
                            <img src="/images/profile-pic3.jpg" alt="">
                            <h1>Engr. Benjamin L. Acedera</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="begin-adventure">
                <div class="container">
                    <div class="title-heading">
                        <h1 id="faq">Frequently Asked Questions</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam earum nulla eum repellat! Saepe voluptas eius optio reiciendis. Animi.</p>
                    </div>
                    <div class="mini-menu" id="mini-menu-list">
                        <a href="#pow">Request for Program of Works</a>
                        <a href="#tricycle">Request for Certificate of Road Worthiness for Tricycle Franchise</a>
                        <a href="#coc">Request for Certificate of Compliance(COC) for Business/Mayors Permit.</a>
                        <a href="#occupancy">Application for Occupancy Permit</a>
                        <a href="#bldg">Application for Building Permit</a>
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
                    <div>
                        <a href="mini-menu-list" class="back-to-menu">Back to List</a>
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

            <section class="contactus">

            </section>



            
        </main>

        <footer>
            <p>&copy; 2019 Office of the Building Official. Calapan City Oriental Mindoro. All Right Reserved.</p>
        </footer>

        <script type="text/javascript">
            document.querySelector(".open").addEventListener('click', () => {
                document.querySelector(".nav-list").classList.add('active');
            })

            document.querySelector(".close").addEventListener('click', () => {
                document.querySelector(".nav-list").classList.remove('active');
            })

        </script>

    </body>
</html>
