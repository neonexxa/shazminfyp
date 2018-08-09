@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Electronic Healthcare Record System</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="alert alert-success">
                            <p>You're logged in as STAFF</p>
                        </div>
                        <br>
                        <a href="{{ url('/staff') }}" class="btn btn-primary "> Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
