@extends('layouts.master')

@section('content')

	<h2>List of RSVPs</h2>

	@foreach($rsvps as $rsvp)
		<h2>Guest Name: {{$rsvp['name']}}</h2>
		<p>Guest Email: {{$rsvp['email']}}</p>
		<p>Guest Address: {{$rsvp['address']}}</p>
		<p>Guest RSVP: {{$rsvp['attending']}}</p>
		<p>Additional Guest: {{$rsvp['guest']}}</p>
		<p>Guest Meal: {{$rsvp['meal']}}</p>

	@foreach($tagsForCheckboxes as $id => $name)
		<input
			type='checkbox'
			value='{{ $id }}'
			name='tags[]'
			{{ (in_array($name, $tagsForThisRsvp)) ? 'CHECKED' : '' }}
		>
		{{ $name }} <br>

	@endforeach
		<div ><a class="editButtons" href='/rsvp/tag/{{$rsvp->id}}'>Organize RSVP</a></div>
		<div class="editButtons"><a href='/rsvp/delete/{{$rsvp->id}}'>Delete RSVP</a></div>
	@endforeach

	@endsection
