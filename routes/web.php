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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('add_travel', 'DataController@show')->name('home');

Route::post('insert_travel', 'DataController@insert_travel');

Route::get('profile', 'DataController@showP');

Route::post('update_profile', 'DataController@update_profile');

Route::get('sessions', 'DataController@show_session')->name('home');

Route::get('about', 'PagesController@about')->name('home');

Route::get('project', 'PagesController@project')->name('home');

Route::get('contact', 'PagesController@contact')->name('home');



Auth::routes();


Auth::routes();
