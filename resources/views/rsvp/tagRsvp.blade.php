@extends('layouts.master')

@section('content')

	<h2>List of RSVPs</h2>

	<form method='POST' action='/rsvp/tag'>
	{{ csrf_field() }}
		<input type='hidden' name='id' value='{{$rsvp->id}}'>
		<h2>Guest Name: {{$rsvp->name}}</h2>
		<p>Guest Email: {{$rsvp->email}}</p>
		<p>Guest Address: {{$rsvp->address}}</p>
		<p>Guest RSVP: {{$rsvp->attending}}</p>
		<p>Additional Guest: {{$rsvp->guest}}</p>
		<p>Guest Meal: {{$rsvp->meal}}</p>



		<label>Guest Categories:</label>
			<ul id='tags'>
			@foreach($tagsForCheckboxes as $id => $name)
				<li><input
					type='checkbox'
					value='{{ $id }}'
					id='tag_{{ $id }}'
					name='tags[]'
				>
				<label for='tag_{{ $id }}'>{{ $name }}</label></li>
			@endforeach
		</ul>


		<input class="button" type="submit" name="button" value="tag rsvp">
	</form>

@endsection

