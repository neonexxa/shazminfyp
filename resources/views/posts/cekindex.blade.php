
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
                width:100%;
                height:100%;
            }

            
        </style>

<br><br><br>
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
            <a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
        </div>
</div>
<body>

<div class="container">
    <div class="row">
    <div class="col-sm-7">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Check-Up Details</span></div>
        </div>
    </div>

    @if(Session::has('message'))
                <div class= "alert alert-success">{{Session::get('message') }}</div>
            @endif 
       

    <table class="table">
        <thead>
        <tr>
            <th width="60px">No</th>
            <th width="60px">Date</th>
            <th>Patient ID</th>
                {{request()->session()->get('field')=='cek_id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                    
            <th>Name</th>
                {{request()->session()->get('field')=='cek_name'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}

            <th>Address</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Hospital</th>                           
            <th>Weight</th>
            <th>Height</th>
            <th>BMI</th>
            <th>Blood Pressure</th>
            <th>Bone Density</th>
            <th>Blood Type</th>
            <th>Create At</th> 
            <th>Update At</th>
            <th width="160px" style="vertical-align: middle">
              <a href="{{ URL::route('Checkup.create') }}"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Register Patient</a>
            </th>

        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp

        @foreach ($posts as $post)
          <tr>
            <td>{{$i++}}</td>
            <td>{{ $post->cek_date }}</td>
            <td>{{ $post->cek_id }}</td>
            <td>{{ $post->cek_name }}</td>
            <td>{{ $post->cek_address }}</td>
            <td>{{ $post->cek_age }}</td>
            <td>{{ $post->cek_phone }}</td>
            <td>{{ $post->cek_hospital }}</td>
            <td>{{ $post->cek_weight }}</td>
            <td>{{ $post->cek_height }}</td>
            <td>{{ $post->cek_bmi }}</td>
            <td>{{ $post->cek_bp }}</td>
            <td>{{ $post->cek_bone }}</td>
            <td>{{ $post->cek_blood }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>
            <a class="btn btn-xs btn-info" href="{{ route('Checkup.show', $post->id) }}">Show</a>  <br>
            <a class="btn btn-xs btn-primary" href="{{ route('Checkup.edit', $post->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE', 'route'=>['Checkup.destroy', $post->id], 'style'=> 'display:inline']) !!}
            <br>
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
        <!--{!! $posts->links() !!}-->
</body>
</div>
</html>