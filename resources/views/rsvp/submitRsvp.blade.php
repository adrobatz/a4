@extends('layouts.master')

@section('content')

    <form method='POST' action='/rsvp'>
    {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br/>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br/>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"><br/>
        <ul>
            <li><input type="radio" name="attending" value="yes">yes</li>
            <li><input type="radio" name="attending" value="no">no</li>
        </ul>
        <div class="checkbox">
        <input type='checkbox' name='guest'>
        <label>Will you be bringing a plus one?</label>
        </div>
        <ul>
            <li><input type="radio" name="meal" value="none">none</li>
            <li><input type="radio" name="meal" value="fish">fish</li>
            <li><input type="radio" name="meal" value="meat">meat</li>
            <li><input type="radio" name="meal" value="vegetarian">vegetarian</li>
        </ul>
    <input class="button" type="submit" name="button" value="submit rsvp">
    </form>


@endsection
