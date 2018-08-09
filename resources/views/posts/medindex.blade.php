@extends('posts.master')
<br><br><br>
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            @include('posts.navroute',['panel'=>'medical'])
        </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-sm-7">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Add Medical Details</span></div>
        </div>

        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                 <form class="navbar-form navbar-left" method="GET">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" name="search" value="@if(!empty($searchinput)){{$searchinput}}@endif" placeholder="Search Patient ID">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </form>
            </div>
          </div>
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
                
            <th>Hospital</th>
            <th>Doctor</th>
            <th>Doctor Specialty</th>
            <th>Type of Disease</th>                           
            <th>Description</th>
            <th>Food Allergy</th>
            <th>Medicinal Allergy</th>
            <th>Presccription</th> 
            <th width="160px" style="vertical-align: middle">
              <a href="{{ URL::route('Medical.create') }}"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Add Medical Record</a>
            </th>

        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp

        @foreach ($medicals as $medical)
          <tr>
            <td>{{$i++}}</td>
            <td>{{ $medical->date }}</td>
            <td>{{ $medical->p_id }}</td>
            <td >{{ $medical->med_name }}</td>
            <td >{{ $medical->hosp }}</td>
            <td >{{ $medical->doctor }}</td>
            <td>{{ $medical->doc_spec }}</td>
            <td>{{ $medical->disease }}</td>
            <td >{{ $medical->desc }}</td>
            <td >{{ $medical->f_allergy }}</td>
            <td >{{ $medical->m_allergy }}</td>
            <td>{{ $medical->pres }}</td>
            <td>
            <a class="btn btn-xs btn-info" href="{{ route('Medical.show', $medical->id) }}">Show</a>
            <a class="btn btn-xs btn-primary" href="{{ route('Medical.edit', $medical->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE', 'route'=>['Medical.destroy', $medical->id], 'style'=> 'display:inline']) !!}
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!} 
            </td> 
        </tr>
        @endforeach

        </tbody>
    </table>  

    
        <ul class="pagination">
            {{ $medicals->links() }}
        </ul>
</div>