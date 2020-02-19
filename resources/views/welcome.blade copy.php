<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Office of the Building Official</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100wh;
                height: 90vh;
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(to right, #382039, #200f21)
            }



            a {
                text-decoration: none;
                color: #000;
            }

            h1,
            h6 {
                font-family: 'Open Sans';
                font-weight: 300;
                text-align: center;
                position: absolute;
                top: 45%;
                right: 0;
                left: 0;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            .title {
                font-size: 84px;
            }
            .content {
                text-align: center;
            }
            .position-ref {
                position: relative;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .quote {
                width: 1200px;
                min-height: 400px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                
            }

            .quote .ito .box {
                position: relative;
                width: 360px;
                height: 400px;
                background: #fff;
                overflow: hidden;
                transition: 0.5s;
                border-radius: 15px;
                box-sizing: border-box;
                padding: 30px;
                box-shadow: -10px 25px 50px rgba(0,0,0,.2);
            }

            .quote .ito .box:hover {
                box-shadow: -20px 50px 100px rgba(0,0,0,.4);
            }

            .quote .ito .box p
            {
                margin: 0;
                padding: 0;
                font-size: 18px;
            }

            .quote .ito .box:hover p 
            {
                color: #fff;
            }

            .quote .ito .box h2
            {
                position: absolute;
                bottom: 30px;
                right: 30px;
                margin: 0;
                padding: 0;
                font-size: 24px;
                text-transform:uppercase;
            }

            
            .quote .ito .box:hover h2 
            {
                color: #fff;
            }

            .quote .bg {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
                opacity: 0;
                transition: 0.5s;
                pointer-events: none;
                width: 100%;
                height: 100%;
            }

            .quote .ito .box.box1 ~ .bg,
            .quote .ito .box.box1:hover 
            {
                opacity: 1;
                background: linear-gradient(#03A9F4, #E91E63)

            }

            .quote  .box.box2:hover ~ .bg,
            .quote  .box.box2:hover 
            {
                opacity: 1;
                background: linear-gradient(#FFC107, #19fd36)

            }

            .quote  .box.box3:hover ~ .bg,
            .quote  .box.box3:hover 
            {
                opacity: 1;
                background: linear-gradient(#FFc107, #E91E63)

            }

            .quote .box:before {
                content: '';
                position: absolute;
                top: 0;
                left: -50%;
                width: 100%;
                height: 100%;
                background: rgba(255,255,255,.2);
                pointer-events: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="quote">

                <div>
                    <a href="{{ route('kiosk.add-simple-permit') }}" class="ito">
                    <div class="box box1">
                       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vitae facilis natus dicta reprehenderit tempore aut quaerat blanditiis ipsa quo!. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, qui?
                       </p> 
                       <h2>Simple Application</h2>
                    </div>
                    </a>
 
                    <div class="bg"></div>
                </div>
                <div>
                    <a href="{{ route('kiosk.add-complex-permit') }}" class="ito">
                    <div class="box box2">
                        <p>    
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vitae facilis natus dicta reprehenderit tempore aut quaerat blanditiis ipsa quo!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quia.
                        </p>    
                        <h2>Complex Application</h2>
                    </div>
                    </a>
                    <div class="bg"></div>
                </div>
                <div>
                    <a href="" class="ito">
                    <div class="box box3">
                         <p>    
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vitae facilis natus dicta reprehenderit tempore aut quaerat blanditiis ipsa quo!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, molestiae.
                        </p> 
                        <h2>Inquiries</h2>
                    </div>

                    </a>
                    <div class="bg"></div>
                </div>
            </div>

        </div>




    </body>
</html>
