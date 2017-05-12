@extends('layouts.master')

@section('content')

	<h1>Thanks for responding!</h1>

	<h2>We're excited to see you!</h2>

	<h2>Your RSVP:</h2>

	@foreach($rsvps as $rsvp)
		<div class="rsvp">
			<h2>{{$rsvp['name']}}</h2>
			<p>{{$rsvp['email']}}</p>
			<p>{{$rsvp['address']}}</p>
			<p>{{$rsvp['attending']}}</p>
			<p>{{$rsvp['meal']}}</p>
		</div>
	@endforeach

@endsection