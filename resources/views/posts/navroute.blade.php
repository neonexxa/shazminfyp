@switch($panel)
	@case('app')
		<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
		<a href="{{ route('posts.index') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
			@if(Auth::user()->admin)
				<a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
			@else
				<a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
			@endif
		@break

    @case('checkup')
    	<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
        <a href="{{ route('Checkup.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
       		@if(Auth::user()->admin)
				<a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
			@else
				<a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
			@endif
        @break

    @case('medical')
    	<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
        <a href="{{ route('Medical.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Medical Details</a>
        	@if(Auth::user()->admin)
				<a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
			@else
				<a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
			@endif
        @break

    @case('feedback')
    	<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
    	<a href="{{ url('') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
    	<a href="{{ route('Feedback.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
    		{{-- @if(Auth::user()->admin)
				<a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
			@else
				<a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
			@endif --}}
    	@break

    @case('register')
    	<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
    	
    		@if(Auth::user()->admin)
				<a href="{{ url('/doctor') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
			@else
				<a href="{{ route('Daftar.index') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
				<a href="{{ url('/staff') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
			@endif
    	@break

    @default
		<a href="{{ url('/home') }}"  class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
    	<a href="{{ route('posts.index') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Appointment</a>
    	<a href="{{ route('Checkup.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Check-Up Details</a>
    	<a href="{{ route('Medical.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Medical Details</a>
    	@if(Auth::user()->admin)
		@else
		<a href="{{ route('Daftar.index') }}"  class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register New Patient</a>
		@endif
        <a href="{{ route('Feedback.index') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
@endswitch




