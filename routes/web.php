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

Route::get('profile', 'DataController@showP');

Route::post('update_profile', 'DataController@update_profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add_travel', 'DataController@show_travels');
Route::post('insert_travel', 'DataController@insert_travel');

Route::get('add_car', 'DataController@show_cars');

Route::get('add_feedback', 'DataController@show_feed');
Route::post('insert_feedback', 'DataController@insert_feedback');

Route::get('feedbacks', 'DataController@show_feedback');


Route::get('sessions', 'DataController@show_session');

Route::get('about', 'PagesController@about')->name('home');

Auth::routes();
