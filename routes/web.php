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

/* Bride Routes */
Route::get('/allrsvps', 'RsvpController@index');
Route::get('/rsvp/edit/{id}', 'RsvpController@edit');
Route::post('/rsvp/edit/', 'RsvpController@saveEdits');

/* Guest Routes */

Route::get('/yourrsvp', 'RsvpController@yourRsvp');
Route::get('/rsvp', 'RsvpController@submitRsvp');
Route::post('/rsvp', 'RsvpController@showRsvp');




