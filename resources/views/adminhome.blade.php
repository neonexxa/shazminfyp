@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Electronic Healthcare Record System</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                        <p>You're logged in as DOCTOR</p>
                    </div>

                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No.</th>
                          <th>Member Name</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key => $value)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <a href="{{ url('/doctor') }}" class="btn btn-primary "> Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection