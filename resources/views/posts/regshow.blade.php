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
            <a href="{{ url('/regindex') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>

        </div>
</div>
@section('content')
        <div class="content">
            <center><div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Patient Details</span></div>
            </center>
        </div>

  <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $daftars->reg_id }}</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Date: </th>
                        <td>{{ $daftars->reg_date }}</td>
                    </tr>

                    <tr>
                        <th>Patient ID: </th>
                        <td>{{ $daftars->reg_id }}</td>
                    </tr>

                    <tr>
                        <th>Name: </th>
                        <td>{{ $daftars->reg_name }}</td>
                    </tr>

                    <tr>
                        <th>Address: </th>
                        <td>{{ $daftars->reg_address }}</td>
                    </tr>

                    <tr>
                        <th>Age: </th>
                        <td>{{ $daftars->reg_age }}</td>
                    </tr>

                    <tr>
                        <th>Religion: </th>
                        <td>{{ $daftars->reg_religion }}</td>
                    </tr>

                    <tr>
                        <th>Phone: </th>
                        <td>{{ $daftars->reg_phone }}</td>
                    </tr>

                    <tr>
                        <th>Created At: </th>
                        <td>{{ $daftars->created_at }}</td>
                    </tr>

                    <tr>
                        <th>Updated At: </th>
                        <td>{{ $daftars->updated_at }}</td>
                    </tr>
                </table>
                </div>
            </div>
  
  <center><a class="btn btn-primary" href="{{ url('/regindex') }}">Back</a></center>  
@endsection
