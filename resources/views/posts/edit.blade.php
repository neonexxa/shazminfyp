@extends('posts.master')


<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            @include('posts.navroute',['panel'=>'app'])
            
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

  {!! Form::model($post, ['method'=>'PATCH','route'=>['posts.update', $post->id]])!!}
    @include('posts.create')
  {!! Form::close() !!}

@endsection