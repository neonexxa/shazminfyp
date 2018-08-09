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
    <body background="images/wall7.jpeg">
        <!-- navigation Bar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>

        </div>
    </div>
<br><br>
        <div class="content">
        <div class="w3-padding-16"><span class="w3-xlarge w3-teal w3-border-teal w3-bottombar">Sent us your Feedback!</span></div>
           
       </div>
        <div class="containerer">
        
 
                    {!! Form::open(array('route'=>'Feedback.store')) !!}
                    <!-- <div class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">  -->
                        <div class="form-group w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                                <legend>Please provide your feedback below</legend>
                                <p><b>How do you rate your overall experience?</b></p>

                                <label class="radio-inline">
                                <input type="radio" name="experience" id="radio_experience" value="1" >
                                <i class="fa fa-frown-o fa-1x" aria-hidden="true"></i> Bad
                                </label>


                                <label class="radio-inline">
                                <input type="radio" name="experience" id="radio_experience" value="2" >
                                <i class="fa fa-meh-o fa-2x" aria-hidden="true"></i> Just OK
                                </label>


                                <label class="radio-inline">
                                <input type="radio" name="experience" id="radio_experience" value="3" >
                                <i class="fa fa-meh-o fa-3x" aria-hidden="true"></i> Good
                                </label>

                                <label class="radio-inline">
                                <input type="radio" name="experience" id="radio_experience" value="4" >
                                <i class="fa fa-smile-o fa-4x" aria-hidden="true"></i> Very Good
                                </label>

                                <label class="radio-inline">
                                <input type="radio" name="experience" id="radio_experience" value="5" >
                                <i class="fa fa-smile-o fa-4x" aria-hidden="true"></i> Excellent
                                </label>

                                <br><br>
                                {!! Form::label('f_id', 'ID Number:') !!}
                                {!! Form::text('f_id', null, ['class'=>'form-control']) !!}

                                {!! Form::label('f_name', 'Name:') !!}
                                {!! Form::text('f_name', null, ['class'=>'form-control']) !!}

                                {!! Form::label('f_phone', 'Phone Number:') !!}
                                {!! Form::text('f_phone', null, ['class'=>'form-control']) !!}
                                
                                {!! Form::label('f_date', 'Last Appointment Date:') !!}
                                {!! Form::date('f_date', null, ['class'=>'form-control']) !!}
                                <br>

                                {!! Form::label('f_email', 'Name of the Doctor') !!}
                                <br>
                                <select id = "f_email" name="f_email" >
                                    <option value = "#"></option>
                                    <option value = "Dr. Rosdi Ramli"> Dr. Rosdi Ramli</option>
                                    <option value = "Dr. Marina Harumi">Dr. Marina Harumi</option>
                                    <option value = "Dr. Samantha Steven">Dr. Samantha Steven</option>
                                    <option value = "Dr. Ahmad Farid">Dr. Ahmad Farid</option>
                                </select>
                                <br><br>

                                {!! Form::label('f_comment', 'Comments:') !!}
                                {!! Form::textarea('f_comment', null, ['class'=>'form-control']) !!}

                                {!! Form::label('f_record', 'Send me the current Healthcare Record') !!}
                                {!! Form::checkbox('f_record', null, ['class'=>'form-control']) !!}

                                <br>
                                
                                <center>{!! Form::button('Sent Feedback', ['type'=>'submit', 'class'=> 'btn btn-primary']) !!}</center>

                            <div>
                        </div>
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

    </body>
</html>