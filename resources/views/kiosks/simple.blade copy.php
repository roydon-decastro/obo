<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            width: 100wh;
            height: 90vh;
            
            background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
            background-size: 400% 400%;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 15s ease infinite;
            animation: Gradient 15s ease infinite;
        }

        @-webkit-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }

        @-moz-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }

        @keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
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

        .gitna {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        padding: 40px;
        }

        div label {
            color: #fffff;
        }
    </style>
</head>
<body>
    <div class="container gitna bg-light" >

            <form action="{{ route('kiosk.simple-store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <h4>Owner/Applicant Details</h4>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" name="fname" id="validationDefault01" placeholder="First name" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" name="lname" id="validationDefault02" placeholder="Last name" value="" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault03">MI</label>
                        <input type="text" class="form-control" name="mi_name" id="validationDefault03" placeholder="MI" value="" required>
                    </div>
                    
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault03a">TIN</label>
                        <input type="text" class="form-control" name="tin" id="validationDefault03a" placeholder="TIN" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="validationDefault04">Address</label>
                        <input type="text" class="form-control" name="address" id="validationDefault04" placeholder="Address" value="" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefault06">Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" id="validationDefault06" placeholder="zip code" value="" required>
                    </div>
                </div>
                <h4>Location of Construction</h4>
                <div class="form-row">
                    <div class="col-md-1 mb-3">
                        <label for="validationDefault01">Block No.</label>
                        <input type="number" class="form-control" name="loc_blk" id="validationDefault01" placeholder="" value="">
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="validationDefault02">Lot No.</label>
                        <input type="number" class="form-control" name="loc_lot" id="validationDefault02" placeholder="" value="">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault03">Street</label>
                        <input type="text" class="form-control" name="loc_street" id="validationDefault03" placeholder="Street" value="">
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="brgy">Barangay</label>
                        <select class="form-control" value="" name="barangay_id" id="barangay_id">
                                @foreach($barangays as $barangay)
                                        <option value=" {{ $barangay->id }} "> {{ $barangay->name }} </option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault03">TCT No.</label>
                        <input type="text" class="form-control" name="tct" id="validationDefault03" placeholder="TCT No." value="">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault03">Tax Dec. No.</label>
                        <input type="text" class="form-control" name="taxdec" id="validationDefault03" placeholder="Tax Dec. No." value="">
                    </div>
                </div>


                
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        
    </div>
    
</body>
</html>