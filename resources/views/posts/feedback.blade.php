@extends('posts.master')
<br><br><br>
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            @include('posts.navroute', ['panel' => 'feedback'])
        </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h2>Feedback</h2>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Name of the Doctor</th>
                        <th>Experience</th>                         
                        <th>Comments</th>
                        <th>Request for Healthcare Record</th>
                        <th>Create At</th> 
                        <th>Update At</th>
                        <th style="vertical-align: middle">
                          <a href="{{ route('Feedback.create') }}"
                             class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Comment</a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($posts as $post)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{ $post->f_date }} </td>                       
                    <td> {{ $post->f_id }} </td>
                    <td> {{ $post->f_name }}</td>
                    <td> {{ $post->f_phone }} </td>
                    <td> {{ $post->f_email }}</td>
                    <td> {{ $post->experience }} </td>
                    <td> {{ $post->f_comment }}</td>
                    <td> {{ $post->f_record }}</td>
                    <td> {{ $post->created_at }}</td>
                    <td> {{ $post->updated_at }}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('Feedback.show', $post->id) }}">Show</a>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>  

            {{ $posts->links() }}
</div>