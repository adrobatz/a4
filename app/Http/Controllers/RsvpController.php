<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
class RsvpController extends Controller
{
    //


     public function submitRsvp(Request $request) {


//delete

        $rsvp = Rsvp::find(2);

        if(!$rsvp){
            dump ('not deleted');
        } else {
            $rsvp->delete();
            dump('deleted');
        }

//update row

        // $rsvp = Rsvp::where('attending', 'LIKE', 'yes')->first();

        // $rsvp->attending = 'no';

        // $rsvp->save();

        // dump("update complete");



//show specific list aka filtering

        // $rsvp = new Rsvp();
        // $rsvps = $rsvp->where('attending', 'LIKE', 'yes')->get();
        // dump($rsvps->toArray());

//show all rows
        // $rsvp = new Rsvp();
        // $rsvps = $rsvp->all();
        // dump($rsvps->toArray());



// ADD RSVP TO THE LSIT
        // $newRsvp = new Rsvp();

        // $newRsvp->name = "Jane Doe";
        // $newRsvp->address =  "123 Main St., Anytown USA";
        // $newRsvp->email = "janedoe@gmail.com";
        // $newRsvp->attending = "yes";
        // $newRsvp->guest = "no";
        // $newRsvp->meal = "fish";

        // $newRsvp->save();

        // dump($newRsvp->toArray());

   
	return view('rsvp.submitRsvp');
    # 
    #
    # [...Code will eventually go here to actually save this book to a database...]
    #
    #

    # Redirect the user to the page to view the book
}

        // # guest meal choice
        // # this is required

    
       

     	




/**
* POST
* /books/new
* Process the form for adding a new book
*/
public function showRsvp(Request $request) {

$meal = $request->input('meal', null);
 if ($meal){
            if(isset($_POST['meal'])) {
                if($_POST['meal'] == 'fish') {
                    $meal = 'fish';
                } elseif($_POST['meal'] == 'meat') {
                    $meal = 'meat';
                } else {
                    $meal = 'vegetarian';
                }
            }

            # check off to earn an extra 50 points
            if ($request->has('guest')) {
	           $guestCount = 'guest';
            } else {
	           $guestCount = 'no guest';
            }
dump($meal);
return view('rsvp.showRsvp');

}

}
}