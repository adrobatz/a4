<?php

use Illuminate\Database\Seeder;
use App\Rsvp;
use App\Tag;

class RsvpTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    # First, create an array of all the books we want to associate tags with
    # The *key* will be the book title, and the *value* will be an array of tags.
    # Note: purposefully omitting the Harry Potter books to demonstrate untagged books
    $rsvps =[
        'Lavender Brown' => ['guest of bride','family'],
        'Bellatrix Lestrange' => ['guest of bride', 'guest of groom', 'friend'],
        'Fleur Delacour' => ['guest of bride', 'friend', 'coworker']
    ];

    # Now loop through the above array, creating a new pivot for each book to tag
    foreach($rsvps as $name => $tags) {

        # First get the rsvp
        $rsvp = Rsvp::where('name','like',$name)->first();

        # Now loop through each tag for this book, adding the pivot
        foreach($tags as $tagName) {
            $tag = Tag::where('name','LIKE',$tagName)->first();

            # Connect this tag to this book
            $rsvp->tags()->save($tag);
        }

    }
    }
}
