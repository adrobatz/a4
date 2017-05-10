@extends('layouts.master')


@section('content')
 
    <form method='POST' action='/rsvp'>
    {{ csrf_field() }}
    <div class="guestForm">
    <div class="guestInfo">
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name"><br/>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br/>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"><br/>
</div>
<div class="guestInfo">
        <label>Will you be attending?</label>
        <ul>
            <li><input type="radio" name="attending" value='accept' >accept</li>
            <li><input type="radio" name="attending" value='regret'>regret</li>
        </ul>
    </div>
    <div class="guestInfo">
        <label>Will you be bringing a plus one?</label>
        <ul>
            <li><input type="radio" name="guest" value="yes">yes</li>
            <li><input type="radio" name="guest" value="no">no</li>
        </ul>
    </div>
    <div class="guestInfo">
    <label>Please select a meal:</label>
        <ul>
            <li><input type="radio" name="meal" value="none">none</li>
            <li><input type="radio" name="meal" value="fish">fish</li>
            <li><input type="radio" name="meal" value="meat">meat</li>
            <li><input type="radio" name="meal" value="vegetarian">vegetarian</li>
        </ul>
    </div>
    <input class="button" type="submit" name="button" value="submit rsvp">
    <div class="guestInfo">
    </form>


@endsection
