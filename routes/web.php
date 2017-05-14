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

//--------------------------- PROFILE -------------------------- //
Route::get('update_profile', 'DataController@show_Profile');

Route::post('update_profile', 'DataController@update_profile');

//--------------------------- HOME		-------------------------- //

Route::get('/home', 'HomeController@index')->name('home');

//--------------------------- TRAVEL  -------------------------- //
Route::get('add_travel', 'DataController@show_travels');

Route::post('insert_travel', 'DataController@insert_travel');  // route error first paremeterdan veriyo!!

//--------------------------- CAR  ------------------------- //
Route::get('add_car', 'DataController@show_car');

Route::post('/R', 'DataController@insert_car');

//--------------------------- FEEDBACK  ------------------------- //
Route::get('add_feedback', 'DataController@show_feed');

Route::post('insert_feedback', 'DataController@insert_feedback');

Route::get('feedbacks', 'DataController@show_feedback');

//--------------------------- SESSION  ------------------------- //
Route::get('sessions', 'DataController@show_session');

Route::get('about', 'PagesController@about')->name('home');

Auth::routes();
