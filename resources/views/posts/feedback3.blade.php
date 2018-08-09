@extends('posts.master')

<style>
            .containerer{
                right: 18px;
                top: 18px;
                width:50%;
                height:30%;
                padding-left: 30px;
                margin-left: 350px;
            }
            .content {
                text-align: center;
            }
</style>

<br><br><br>
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>

        </div>
</div>

<div class="container">

    <div class="content">
        <div class="w3-padding-16"><span class="w3-xlarge w3-teal w3-border-teal w3-bottombar">Feedback & Reviews</span></div>
           
    </div>


            @if(Session::has('message'))
                <div class= "alert alert-success">{{Session::get('message') }}</div>
            @endif 
    

                @php
                    $i = 1;
                @endphp
               

                @foreach ($posts as $post)
               
                    <div class="panel-group">
                        <div class="panel panel-warning">
                            <div class="panel-heading">by: {{ $post->f_name }}</div>
                                <div class="panel-body">
                                    <p> Date: {{ $post->f_date }} </p> 
                                    <p> Doctor's Name: {{ $post->f_email }}</p>
                                    <p> Rating: {{ $post->experience }} </p>
                                    <p> Comments: {{ $post->f_comment }}</p>
                                
                                </div>
                        </div>
                    </div>
                @endforeach
                <center><a class="btn btn-primary" href="{{ url('') }}">Back</a></center>

            {{ $posts->links() }}
</div>