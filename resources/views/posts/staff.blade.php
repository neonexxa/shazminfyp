<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>EHRS</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', Arial, Helvetica, sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                top: 18px;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .container{
                right: 18px;
                top: 18px;
                width:60%;
                height:80%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 250px;
            }

            .topnav {
            overflow: hidden;
            background-color: #333;
            }

            .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            .topnav a.active {
            background-color: #4CAF50;
            color: white;
            }           
        </style>

    </head>
    <body>
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/posts') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
            <a href="{{ url('/regindex') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
            <a href="{{ url('/feedback') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
        </div>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
    </div>

        <div class="content">
            <div class="title m-b-md">
                WELCOME TO EHRS               
            </div>
            <h3>Staff Section</h3>
        </div>

        

    </body>
</html>
