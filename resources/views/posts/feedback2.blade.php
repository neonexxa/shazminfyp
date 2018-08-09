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
            
        </div>
</div>
@section('content')
        <div class="content">
        <center><div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Feedback</span></div>
        </center>
        </div>

  <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $post->f_email}}</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Date: </th>
                        <td>{{ $post->f_date}}</td>
                    </tr>

                    <tr>
                        <th>Patient ID: </th>
                        <td>{{ $post->f_id }}</td>
                    </tr>

                    <tr>
                        <th>Name: </th>
                        <td>{{ $post->f_name }}</td>
                    </tr>

                    <tr>
                        <th>Phone: </th>
                        <td>{{ $post->f_phone }}</td>
                    </tr>

                    <tr>
                        <th>Name of the Doctor: </th>
                        <td>{{ $post->f_email }}</td>
                    </tr>

                    <tr>
                        <th>Experience: </th>
                        <td>{{ $post->experience }}</td>
                    </tr>

                    <tr>
                        <th>Comments: </th>
                        <td>{{ $post->f_comment }}</td>
                    </tr>

                    <tr>
                        <th>Request for Healthcare Record: </th>
                        <td>{{ $post->f_record }}</td>
                    </tr>

                </table>
                </div>
            </div>
  
  <center><a class="btn btn-primary" href="{{ url('/feedback') }}">Back</a></center>  
@endsection
