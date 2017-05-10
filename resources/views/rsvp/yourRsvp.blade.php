@extends('layouts.master')

@section('content')

<h1>Your Rsvp:</h1>

@foreach($rsvps as $rsvp)
<div class="rsvp">
<h2>{{$rsvp['name']}}</h2>
<p>{{$rsvp['email']}}</p>
<p>{{$rsvp['address']}}</p>
<p>{{$rsvp['attending']}}</p>
<p>{{$rsvp['guest']}}</p>
<p>{{$rsvp['meal']}}</p>
</div>
@endforeach
@endsection