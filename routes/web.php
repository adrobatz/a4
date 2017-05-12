<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* 
Bride and Groom Routes 
*/

/* Route to show list of Rsvps*/
Route::get('/allrsvps/', 'RsvpController@index');
/*Route to add tags to rsvp*/
Route::get('/rsvp/tag/{id}', 'RsvpController@tagRsvp');
/*Route to save tags  */
Route::post('/rsvp/tag/', 'RsvpController@saveTag');
/*Route to delete rsvp*/
Route::get('/rsvp/delete/{id}', 'RsvpController@deleteRsvp');
/*Route to submit deletion  */
Route::post('/rsvp/delete/', 'RsvpController@confirmDeleteRsvp');

/* 
Guest Routes 
*/

/*Route to show rsvp form */
Route::get('/rsvp', 'RsvpController@submitRsvp');
/*Route to post rsvp form */
Route::post('/rsvp', 'RsvpController@showRsvp');
/*Route to show submitted rsvp */
Route::get('/yourrsvp', 'RsvpController@yourRsvp');

/*Route to edit rsvp*/
Route::get('/rsvp/edit/{id}', 'RsvpController@edit');
/*Route to save edited Rsvp */
Route::post('/rsvp/edit/', 'RsvpController@saveEdits');

