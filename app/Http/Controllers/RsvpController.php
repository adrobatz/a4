<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
use Session;
class RsvpController extends Controller
{
    //

    public function index() {
        $rsvps = Rsvp::all();
        return view('rsvp.index')->with([
            'rsvps' => $rsvps,
            ]); 
    


    }


/* Submit form with RSVP information */


    public function submitRsvp(Request $request) {
 
	    return view('rsvp.submitRsvp');

    }

/**
* Process form and save new rsvp to the database 
*/
public function showRsvp(Request $request) {


            $rsvp = new Rsvp();
            $rsvp->name = $request->name;
            $rsvp->email = $request->email;
            $rsvp->address = $request->address;
            $rsvp->attending = $request->attending;
            $rsvp->guest = $request->guest;
            $rsvp->meal = $request->meal;
            $rsvp->save();

return redirect('/yourrsvp');
}

public function yourRsvp() {
    $rsvps = Rsvp::orderBy('id', 'desc')->limit(1)->get();
    return view('rsvp.yourRsvp')->with([
            'rsvps' => $rsvps,
            ]);
}

public function edit($id) {

    $rsvp = Rsvp::find($id);

    if(is_null($rsvp)) {
        Session::flash('message', 'Looks like you havent RSVPd yet! How about you do that now?');
        return redirect('/rsvp');
    }

    return view('rsvp.edit')->with([
        'id' => $id,
        'rsvp' => $rsvp
    ]);
        

}

public function saveEdits(Request $request) {

    $rsvp = Rsvp::find($request->id);
    $rsvp->name = $request->name;
    $rsvp->email = $request->email;
    $rsvp->address = $request->address;
    $rsvp->attending = $request->attending;
    $rsvp->guest = $request->guest;
    $rsvp->meal = $request->meal;
    $rsvp->save();

    Session::flash('message', 'thanks for updating!');
    return redirect('/rsvp/edit/'.$request->id);

}





}