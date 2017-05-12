@extends('layouts.master')

@section('content')
    * indicates required
    <form method='POST' action='/rsvp'>
    {{ csrf_field() }}
        <div class="guestForm">
            <div class="guestInfo">
                <label for="name">*Your Name:</label>
                <input type="text" name="name" id="name" value='{{ old('name') }}'><br/>
                <label for="email">*Email:</label>
                <input type="email" name="email" id="email" value='{{ old('email') }}'><br/>
                <label for="address">*Address:</label>
                <input type="text" name="address" id="address" value='{{ old('address') }}'><br/>
            </div>
            <div class="guestInfo">
                <label>*Will you be attending?</label>
                <ul>
                    <li><input type="radio" name="attending" value='accept'>accept</li>
                    <li><input type="radio" name="attending" value='regret'>regret</li>
                </ul>
                </div>
            <div class="guestInfo">
                <label>*Will you be bringing a guest?</label>
                <ul>
                    <li><input type="radio" name="guest" value="yes">yes</li>
                    <li><input type="radio" name="guest" value="yes">no</li>
                </ul>
            </div>
            <div class="guestInfo">
                <label>*Please select a meal:</label>
                <ul>
                    <li><input type='radio' value='none' name='meal'>None</li>
                    <li><input type='radio' value='fish' name='meal'>Fish</li>
                    <li><input type='radio' value='meat' name='meal'>Meat</li>
                    <li><input type='radio' value='vegetarian' name='meal'>Vegetarian</li>
                </ul>
            </div>
        </div>
        <input class="button" type="submit" name="button" value="submit rsvp">
    </form>

    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
