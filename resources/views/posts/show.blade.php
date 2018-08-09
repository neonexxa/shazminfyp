@extends('posts.master')
<style>
            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }
            .m-b-md {
                margin-bottom: 30px;
                margin-top: 30px;
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

<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/posts') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
            
        </div>
</div>
@section('content')
        <div class="content">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Patient Details- Appointments</span></div>
 
        </div>

  <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $post->p_id }}</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Date: </th>
                        <td>{{ $post->date }}</td>
                    </tr>

                    <tr>
                        <th>Patient ID: </th>
                        <td>{{ $post->p_id }}</td>
                    </tr>

                    <tr>
                        <th>Patient Name: </th>
                        <td>{{ $post->name }}</td>
                    </tr>

                    <tr>
                        <th>Assign Doctor: </th>
                        <td>{{ $post->assign_doctor }}</td>
                    </tr>

                    <tr>
                        <th>Doctor Specialty: </th>
                        <td>{{ $post->doctor_specialty }}</td>
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
  
  <center><a class="btn btn-primary" href="{{ url('/index') }}">Back</a></center>  
@endsection
