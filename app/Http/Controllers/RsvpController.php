<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
use App\Tag;
use Session;

class RsvpController extends Controller
{

/*
Show list of all Rsvps
*/
    public function index() {
        $rsvps = Rsvp::all();
        $tagsForCheckboxes = Tag::getTagsForCheckboxes();
        $tagsForThisRsvp = [];
        $rsvp = Rsvp::find($rsvps);
        foreach($rsvp->tags as $tag) {
            $tagsForThisRsvp[] = $tag->name;
        }

        return view('rsvp.index')->with([
            'rsvps' => $rsvps,
            'tagsForCheckboxes' => $tagsForCheckboxes,
            'tagsForThisRsvp' => $tagsForThisRsvp,
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
        
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'address' => 'required',
            'attending' => 'required',
            'guest' => 'required',
            'meal' => 'required',
        ]);

        $rsvp = new Rsvp();
        $rsvp->name = $request->name;
        $rsvp->email = $request->email;
        $rsvp->address = $request->address;
        $rsvp->attending = $request->attending;
        $rsvp->guest = $request->guest;
        $rsvp->meal = $request->meal;
        $rsvp->save();;



        return redirect('/yourrsvp');
    }

/**
Show user's submitted RSVP 
**/
    public function yourRsvp() {
        $rsvps = Rsvp::orderBy('id', 'desc')->limit(1)->get();
        return view('rsvp.yourRsvp')->with([
            'rsvps' => $rsvps,
        ]);
    }

/*
Edit the Rsvp form
*/
    public function edit($id) {

        $rsvp = Rsvp::find($id);

        if(is_null($rsvp)) {
            
            Session::flash('message', 'Looks like you havent RSVPd yet! How about you do that now?');
            return redirect('/rsvp');
        }


        return view('rsvp.edit')->with([
            'id' => $id,
            'rsvp' => $rsvp,

        ]);
    }

/* 
Save edits made to the Rsvp
*/

    public function saveEdits(Request $request) {
        
            $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'address' => 'required',
            'attending' => 'required',
            'guest' => 'required',
            'meal' => 'required',
        ]);

        $rsvp = Rsvp::find($request->id);
        $rsvp->name = $request->name;
        $rsvp->email = $request->email;
        $rsvp->address = $request->address;
        $rsvp->attending = $request->attending;
        $rsvp->guest = $request->guest;
        $rsvp->meal = $request->meal;
        $rsvp->save();




        Session::flash('message', 'thanks for updating!');
        return redirect('/');

    }

/* 
tag RVSP with guest info 
*/
    public function tagRsvp($id) {

        $rsvp = Rsvp::find($id);
        $tagsForCheckboxes = Tag::getTagsForCheckboxes();



        return view('rsvp.tagRsvp')->with([
        'id' => $id,
        'rsvp' => $rsvp,
        'tagsForCheckboxes' => $tagsForCheckboxes,
        ]);
}

/* 
save the new tag information and add it to the relevant RSVP
*/
    public function saveTag(Request $request) {
    
        $rsvp = Rsvp::find($request->id);
        $tags = ($request->tags) ?: [];
        $rsvp->tags()->sync($tags);
        $rsvp->save();

        Session::flash('message', 'guest has been updated');
        return redirect('/allrsvps');

    }
/*
delete RSVP
*/
    public function deleteRsvp($id) {
        $rsvp = Rsvp::find($id);
        
        return view('rsvp.delete')->with([
            'id' => $id,
            'rsvp' => $rsvp,
        ]);
}
/* 
confirm deletion
*/
    public function confirmDeleteRsvp(Request $request) {
        $rsvp = Rsvp::find($request->id);
        $rsvp->tags()->detach();
        $rsvp->delete();
    
        Session::flash('message', 'rsvp deleted');
        return redirect('/allrsvps');

    }
}