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
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                height: 100vh;
                margin: 0;
            }

            .container{
                right: 18px;
                top: 18px;
                width:100%;
                height:100%;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top:60px;
            }
            .containerer{
                right: 18px;
                top: 18px;
                width:50%;
                height:40%;
                padding-left: 30px;
                margin-left: 350px;
            }

            
        </style>
    </head>
    <body>
        <!-- navigation Bar -->
    <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            @include('posts.navroute',['panel'=>'checkup'])

        </div>
    </div>
<br><br><br>
       <div class="content">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Add New Check-Up Details</span></div>
        </div>

        <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">Add Check Up Details</div>
                <div class="panel-body">
 
                    {!! Form::open(array('route'=>'Checkup.store')) !!}

                        <div class="form-group">
                                {!! Form::label('cek_date', 'Enter Date:') !!}
                                {!! Form::date('cek_date', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_id', 'Enter Patient ID:') !!}
                                {!! Form::text('cek_id', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_name', 'Enter Name:') !!}
                                {!! Form::text('cek_name', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_address', 'Enter Address:') !!}
                                {!! Form::text('cek_address', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_age', 'Enter Age:') !!}
                                {!! Form::text('cek_age', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_phone', 'Enter Phone Number:') !!}
                                {!! Form::text('cek_phone', null, ['class'=>'form-control']) !!}

                                 {!! Form::label('cek_hospital', 'Enter Hospital:') !!}
                                {!! Form::text('cek_hospital', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_weight', 'Enter Weight:') !!}
                                {!! Form::text('cek_weight', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_height', 'Enter Height:') !!}
                                {!! Form::text('cek_height', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_bmi', 'Enter BMI:') !!}
                                {!! Form::text('cek_bmi', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_bp', 'Enter Blood Pressure:') !!}
                                {!! Form::text('cek_bp', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_bone', 'Enter Bone Density:') !!}
                                {!! Form::text('cek_bone', null, ['class'=>'form-control']) !!}

                                {!! Form::label('cek_blood', 'Enter Blood Type:') !!}
                                {!! Form::text('cek_blood', null, ['class'=>'form-control']) !!}
                                <br>
                                
                                <center>{!! Form::button('Add Record', ['type'=>'submit', 'class'=> 'btn btn-primary']) !!}</center>

                            <div>

                        {!! Form::close() !!}
                            </div>

                    </div>
                        @if($errors->count())
                            <ul class="alert alert-danger">
                                @foreach($errors->all () as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        @endif
                </div>
                </div>
            </div>
        </div>

    </body>
</html>