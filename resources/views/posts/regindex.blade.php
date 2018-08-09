@extends('posts.master')
<br><br><br>
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/regindex') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
            <a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
        </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-sm-7">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Register Patient</span></div>
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
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                    
            <th>Name</th>
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                
            <th>Age</th> 
            <th>Religion</th>
            <th>Phone</th> 
            <th>Create At</th> 
            <th>Update At</th>
            <th width="160px" style="vertical-align: middle">
              <a href="{{ URL::route('Daftar.create') }}"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Register Patient</a>
            </th>

        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp

        @foreach ($daftars as $daftar)
          <tr>
            <td>{{$i++}}</td>
            <td>{{ $daftar->reg_date }}</td>
            <td>{{ $daftar->reg_id }}</td>
            <td >{{ $daftar->reg_name }}</td>
            <td >{{ $daftar->reg_address }}</td>
            <td >{{ $daftar->reg_age }}</td>
            <td >{{ $daftar->reg_religion }}</td>
            <td >{{ $daftar->reg_phone }}</td>
            <td>{{ $daftar->created_at }}</td>
            <td>{{ $daftar->updated_at }}</td>
            <td>
            <a class="btn btn-xs btn-info" href="{{ route('Daftar.show', $daftar->id) }}">Show</a>  <br>
            <a class="btn btn-xs btn-primary" href="{{ route('Daftar.edit', $daftar->id) }}">Edit</a> 

            {!! Form::open(['method' => 'DELETE', 'route'=>['Daftar.destroy', $daftar->id], 'style'=> 'display:inline']) !!}
            <br>
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
        {!! $daftars->links() !!}     
</div>