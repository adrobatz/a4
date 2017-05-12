@extends('layouts.master')

@section('content')

	<h1>List of RSVPs</h1>

	@foreach($rsvps as $rsvp)
		<p><a href='/rsvp/tag/{{$rsvp->id}}'>Organize me</a></p>
		<p><a href='/rsvp/delete/{{$rsvp->id}}'>Delete me</a></p>
		<h2>{{$rsvp['name']}}</h2>
		<p>{{$rsvp['email']}}</p>
		<p>{{$rsvp['address']}}</p>
		<p>{{$rsvp['attending']}}</p>
		<p>{{$rsvp['guest']}}</p>
		<p>{{$rsvp['meal']}}</p>

	@foreach($tagsForCheckboxes as $id => $name)
		<input
			type='checkbox'
			value='{{ $id }}'
			name='tags[]'
			{{ (in_array($name, $tagsForThisRsvp)) ? 'CHECKED' : '' }}
		>
		{{ $name }} <br>

	@endforeach

	@endforeach

	@endsection
