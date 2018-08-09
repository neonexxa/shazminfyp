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
            <a href="{{ url('/posts') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
            <a href="{{ url('/regindex') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
            <a href="{{ url('/feedback') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
        </div>
</div>
@section('content')
        <div class="content">
        <center><div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Medical Details</span></div>
        </center>
        </div>

  <div class="containerer">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $medicals->p_id }}</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Date: </th>
                        <td>{{ $medicals->date }}</td>
                    </tr>

                    <tr>
                        <th>Patient ID: </th>
                        <td>{{ $medicals->p_id }}</td>
                    </tr>

                    <tr>
                        <th>Name: </th>
                        <td>{{ $medicals->med_name }}</td>
                    </tr>

                    <tr>
                        <th>Hospital: </th>
                        <td>{{ $medicals->hosp }}</td>
                    </tr>

                    <tr>
                        <th>Doctor: </th>
                        <td>{{ $medicals->doctor }}</td>
                    </tr>

                    <tr>
                        <th>Doctor Specialty: </th>
                        <td>{{ $medicals->doc_spec }}</td>
                    </tr>

                    <tr>
                        <th>Type of Disease: </th>
                        <td>{{ $medicals->disease }}</td>
                    </tr>

                    <tr>
                        <th>Description: </th>
                        <td>{{ $medicals->desc }}</td>
                    </tr>

                    <tr>
                        <th>Food Allergy: </th>
                        <td>{{ $medicals->f_allergy }}</td>
                    </tr>

                    <tr>
                        <th>Medicinal Allergy: </th>
                        <td>{{ $medicals->m_allergy }}</td>
                    </tr>

                    <tr>
                        <th>Prescription: </th>
                        <td>{{ $medicals->pres }}</td>
                    </tr>
                </table>
                </div>
            </div>
  
  <center><a class="btn btn-primary" href="{{ url('/medindex') }}">Back</a></center>  
@endsection
