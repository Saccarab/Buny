<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Travels;
use App\Profile;

class DataController extends Controller
{
  function show (){
    return view('layouts.add_travel');
  }

  function showP (){
    return view('layouts.profile');
  }

  function show_session (){
	 $Travels = DB::table('travels')->get();
	 return view('layouts.sessions', compact('Travels'));
  }

  public function joinTravelqueries(){
	  $Query = DB::table('travels')
	  ->join('travel_session', 'travels.id', '=', 'travel_session.travels_id')
	  ->join('passengers', 'travels.passengers_id', '=', 'passengers.travels_id')
	  ->get();
  }

  public function joinProfilequeries(){
	  $Query = DB::table('profiles')
	  ->join('users', 'profiles.id', '=', 'users.id')
	  ->join('colleges', 'profiles.college_id', '=', 'colleges.id')
	  ->get();
  }

  function insert_travel (Request $request){
    $Travel = new Travels;
    $Travel->starting_point=$request->title;
    $Travel->destination=$request->editor1;
	 $Travel->price=$request->price;
	 $rules = ['price' => 'min:0|max:20'];
	 $this->validate($request, $rules);
	 $Travel->seatsAvailable=$request->seats;
    $Travel->save();
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

}
