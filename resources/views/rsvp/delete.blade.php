@extends('layouts.master')

@section('content')

	<h1>Delete this RSVP?</h1>
	
	<form method='POST' action='/rsvp/delete'>
	{{ csrf_field() }}
	
		<input type='hidden' name='id' value='{{$rsvp->id}}'>
		<h2>{{$rsvp->name}}</h2>
		<p>{{$rsvp->email}}</p>
		<p>{{$rsvp->address}}</p>
		<p>{{$rsvp->attending}}</p>
		<p>{{$rsvp->guest}}</p>
		<p>{{$rsvp->meal}}</p>
		
		<input class="button" type="submit" name="button" value="delete rsvp">
	</form>

@endsection