<?php

use Illuminate\Database\Seeder;
use App\Rsvp;

class RsvpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rsvp::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lavender Brown',
        'address' => '2987 Hart Country Lane, Summerville, Georgia 30747',
        'email' => 'lavenderbrown@gmail.com',
        'attending' => 'yes',
        'guest' => 'no',
        'meal' => 'fish',
    ]);
        Rsvp::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Fleur Delacour',
        'address' => '95 Academy Street, BERNERS RODING CM5 5DN UK',
        'email' => 'fleurdelacour@gmail.com',
        'attending' => 'no',
        'guest' => 'no',
        'meal' => 'none',
    ]);
        Rsvp::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Bellatrix Lestrange',
        'address' => '1 Seaford Road, CURRY MALLET TA3 0DU UK',
        'email' => 'bellatrix@gmail.com',
        'attending' => 'yes',
        'guest' => 'yes',
        'meal' => 'meat',
    ]);
        Rsvp::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Luna Lovegood',
        'address' => '76 Shannon Way, CHISLEHURST BR7 9RW UK',
        'email' => 'lovegoodluna@gmail.com',
        'attending' => 'yes',
        'guest' => 'no',
        'meal' => 'vegetarian',
    ]);
        Rsvp::insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Severus Snape',
        'address' => '35 Graham Road, CHEADLE ST10 1AH UK',
        'email' => 'severussnape@gmail.com',
        'attending' => 'yes',
        'guest' => 'no',
        'meal' => 'fish',
    ]);
    }
}
