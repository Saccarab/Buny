<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Travels;
use App\Feedback;
use App\Profile;

class DataController extends Controller
{
	function showP (){
    return view('layouts.profile');
  }
  function show_session (){
     $Travels = DB::table('travels')->get();
     return view('layouts.sessions', compact('Travels'));
  }
  function show_travels (){
    return view('layouts.add_travel');
  }
  public function joinTravelqueries(){
    $Query = DB::table('travels')
    ->join('travel_session', 'travels.id', '=', 'travel_session.travels_id')
    ->join('passengers', 'travels.passengers_id', '=', 'passengers.travels_id')
    ->get();


  function show_cars (){
    return view('layouts.add_cars');
  }

  function show_feed (){
    return view('layouts.add_feedback');
  }

  function insert_travel (Request $request){
    $Travels= new Travels;
    $Travels->driver_id=Auth::id();
    $Travels->starting_point=$request->title;
    $Travels->destination=$request->editor1;
	  $Travels->price=$request->price;
	  //$rules = ['price' => 'min:0|max:20'];
	  //$this->validate($request, $rules);
	  $Travels->seatsAvailable=$request->seats;
    $Travels->session_start=$request->date;
    $Travels->save();
  }

  function update_profile (Request $request){
  $profile = new profile;
  $profile->id = Auth::id();
  $profile->college_id = $request->title;
  $profile->student_id = $request->studentId;
  $profile->name = $request->name;
  $profile->surname = $request->surname;
  $profile->gender = $request->gender;

  $result = $request->DOBDay;
  $result .= "/";
  $result = $result . '' . $request->DOBMonth;
  $result .= "/";
  $result = $result . '	' . $request->DOBYear;
  $profile->date_of_birth = $result;


  $profile->save();
  }

  function insert_feedback (Request $request){
    $Feedback= new Feedback;
    $Feedback->passenger_id=Auth::id();
    $Feedback->comment=$request->comment;
    $Feedback->rating=$request->rating;
    $Feedback->save();
  }

  function show_feedback (){
    $Feedback = DB::table('feedback')->get();
    return view('layouts.feedbacks', compact('Feedback'));
  }
}
