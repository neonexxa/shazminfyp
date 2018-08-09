@extends('posts.master')
<style>
            .containerer{
                right: 18px;
                top: 18px;
                width:50%;
                height:40%;
                padding-left: 30px;
                margin-left: 350px;
            }
</style>

<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
            
        </div>
</div>
@section('content')
        <div class="content">
        <center><div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Check-Up Details</span></div>
        </center>
        </div>

  <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $post->reg_id }}</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Date: </th>
                        <td>{{ $post->cek_date }}</td>
                    </tr>

                    <tr>
                        <th>Patient ID: </th>
                        <td>{{ $post->cek_id }}</td>
                    </tr>

                    <tr>
                        <th>Name: </th>
                        <td>{{ $post->cek_name }}</td>
                    </tr>

                    <tr>
                        <th>Address: </th>
                        <td>{{ $post->cek_address }}</td>
                    </tr>

                    <tr>
                        <th>Age: </th>
                        <td>{{ $post->cek_age }}</td>
                    </tr>

                    <tr>
                        <th>Phone Number: </th>
                        <td>{{ $post->cek_phone }}</td>
                    </tr>

                    <tr>
                        <th>Hospital: </th>
                        <td>{{ $post->cek_hospital }}</td>
                    </tr>

                    <tr>
                        <th>Weight: </th>
                        <td>{{ $post->cek_weight }}</td>
                    </tr>

                    <tr>
                        <th>Height: </th>
                        <td>{{ $post->cek_height }}</td>
                    </tr>

                    <tr>
                        <th>BMI: </th>
                        <td>{{ $post->cek_bmi }}</td>
                    </tr>

                    <tr>
                        <th>Blood Pressure: </th>
                        <td>{{ $post->cek_bp }}</td>
                    </tr>

                    <tr>
                        <th>Bone Density: </th>
                        <td>{{ $post->cek_bone }}</td>
                    </tr>

                    <tr>
                        <th>Blood Type: </th>
                        <td>{{ $post->cek_blood }}</td>
                    </tr>

                    <tr>
                        <th>Created At: </th>
                        <td>{{ $post->created_at }}</td>
                    </tr>

                    <tr>
                        <th>Updated At: </th>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                </table>
                </div>
            </div>
  
  <center><a class="btn btn-primary" href="{{ url('/cekindex') }}">Back</a></center>  
@endsection
