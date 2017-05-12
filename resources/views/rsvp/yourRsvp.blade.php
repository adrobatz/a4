@extends('layouts.master')

@section('content')

	<h2>Thanks for responding!</h2>

	<h2>We're excited to see you!</h2>

	<h2>Your Rsvp:</h2>

	@foreach($rsvps as $rsvp)
		<div class="rsvp">
			<h2>Name: {{$rsvp['name']}}</h2>
			<p>Email: {{$rsvp['email']}}</p>
			<p>Address: {{$rsvp['address']}}</p>
			<p>RSVP: {{$rsvp['attending']}}</p>
			<p>Guest: {{$rsvp['guest']}}</p>
			<p>Meal: {{$rsvp['meal']}}</p>
		</div>
	@endforeach

	<h2>Need to make a change? Head <a href='/rsvp/edit/{{$rsvp->id}}'>here</a></h2>

@endsection