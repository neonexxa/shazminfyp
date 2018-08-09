
<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
            <a href="{{ url('/posts') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
            <a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
        </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-sm-7">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Add Appointment</span></div>
        </div>

        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">

                <input type="text" 
                        class="form-control" 
                        value="{{ request()->session()->get('search') }}"
                        onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('posts')}}?search='+this.value)"
                        id="search"
                        name="search"
                        placeholder="Search Patient ID">

                <div class="input-group-btn">
                    <button type="submit" name="button" 
                            onclick="ajaxLoad('{{url('posts')}}?search='+$('#search').val())"
                            class="btn btn-primary">
                            <i class="fa fa-search"></i>
                    </button>
                </div>
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

                
            <th>Assign Doctor</th> 
            <th>Doctor Specialty</th> 
            <th>Create At</th> 

            <th>Update At</th>
            <th width="160px" style="vertical-align: middle">
              <a href="{{ URL::route('posts.create') }}"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> New Appointment</a>
            </th>

        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp

        @foreach ($posts as $post)
          <tr>
            <td>{{$i++}}</td>
            <td>{{ $post->date }}</td>
            <td>{{ $post->p_id }}</td>
            <td >{{ $post->name }}</td>
            <td >{{ $post->assign_doctor }}</td>
            <td >{{ $post->doctor_specialty }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>
            <a class="btn btn-xs btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
            <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

<!-- {!! $posts->links() !!} -->
</div>