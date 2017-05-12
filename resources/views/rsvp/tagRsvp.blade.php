@extends('layouts.master')

@section('content')

<h1>List of RSVPs</h1>

<form method='POST' action='/rsvp/tag'>
    {{ csrf_field() }}
<input type='hidden' name='id' value='{{$rsvp->id}}'>
<h2>{{$rsvp->name}}</h2>
<p>{{$rsvp->email}}</p>
<p>{{$rsvp->address}}</p>
<p>{{$rsvp->attending}}</p>
<p>{{$rsvp->guest}}</p>
<p>{{$rsvp->meal}}</p>



<label>Guest Info:</label>
        <ul id='tags'>
            @foreach($tagsForCheckboxes as $id => $name)
                <li><input
                    type='checkbox'
                    value='{{ $id }}'
                    id='tag_{{ $id }}'
                    name='tags[]'
                >&nbsp;
                <label for='tag_{{ $id }}'>{{ $name }}</label></li>
            @endforeach
        </ul>


    <input class="button" type="submit" name="button" value="tag rsvp">
    </form>
    <p><a href='/rsvp/delete/{{$rsvp->id}}'>Delete RSVP?</a></p>
        <br/>
        <br/>
        <br/>




@endsection




