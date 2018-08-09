@extends('posts.master')


<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/cekindex') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
        </div>
</div>
@section('content')


        @if($errors->count())
            <ul class="alert alert-danger">
                @foreach($errors->all () as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        @endif

  {!! Form::model($post, ['method'=>'PATCH','route'=>['Checkup.update', $post->id]])!!}
    @include('posts.cekcreate')
  {!! Form::close() !!}

@endsection