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
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/posts') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
            <a href="{{ url('/regindex') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
            <a href="{{ url('/feedback') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
        </div>
    </div>
<br><br><br>
        <div class="content">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Add New Medical Details</span></div>
           
       </div>
        <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">Add Medical Record</div>
                <div class="panel-body">
 
                    {!! Form::open(array('route'=>'Medical.store')) !!}
                        <div class="form-group">
                                {!! Form::label('date', 'Date:') !!}
                                {!! Form::date('date', null, ['class'=>'form-control']) !!}

                                {!! Form::label('p_id', 'Patient ID:') !!}
                                {!! Form::text('p_id', null, ['class'=>'form-control']) !!}

                                {!! Form::label('med_name', 'Name:') !!}
                                {!! Form::text('med_name', null, ['class'=>'form-control']) !!}

                                {!! Form::label('hosp', 'Hospital:') !!}
                                {!! Form::text('hosp', null, ['class'=>'form-control']) !!}

                                {!! Form::label('doctor', 'Doctor:') !!}
                                {!! Form::text('doctor', null, ['class'=>'form-control']) !!}

                                {!! Form::label('doc_spec', 'Doctor Specialty:') !!}
                                {!! Form::text('doc_spec', null, ['class'=>'form-control']) !!}

                                {!! Form::label('disease', 'Type of Disease:') !!}
                                {!! Form::text('disease', null, ['class'=>'form-control']) !!}

                                {!! Form::label('desc', 'Description:') !!}
                                {!! Form::text('desc', null, ['class'=>'form-control']) !!}

                                {!! Form::label('f_allergy', 'Food Allergy:') !!}
                                {!! Form::text('f_allergy', null, ['class'=>'form-control']) !!}

                                {!! Form::label('m_allergy', 'Medicinal Allergy:') !!}
                                {!! Form::text('m_allergy', null, ['class'=>'form-control']) !!}

                                {!! Form::label('pres', 'Prescription:') !!}
                                {!! Form::text('pres', null, ['class'=>'form-control']) !!}

                                <br>
                                
                                <center>{!! Form::button('Add Medical Record', ['type'=>'submit', 'class'=> 'btn btn-primary']) !!}</center>

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