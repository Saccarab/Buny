<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

//s takili acma xD
use App\Travel;
use App\Feedback;
use App\Profile;
use App\Car;
use App\Modelv;
use App\Color;
use App\Brand;

class DataController extends Controller
{
	// JOIN JOIN JOIN JOIN //
	public function joinTravelqueries(){
  	$Query = DB::table('travels')
  	->join('travel_session', 'travels.id', '=', 'travel_session.travels_id')
  	->join('passengers', 'travels.passengers_id', '=', 'passengers.travels_id')
  	->get();

  }


//--------------------------- TRAVEL  -------------------------- //
//--------------------------- TRAVEL  -------------------------- //
//--------------------------- TRAVEL  -------------------------- //

  function show_travels (){
    return view('layouts.add_travel');
  }

  function insert_travel (Request $request){
	 $Travels= new Travel;
	 $Travels->driver_id = Auth::id();
	 $Travels->starting_point=$request->title;
	 $Travels->destination=$request->editor1;
   $Travels->price=$request->price;
   //$rules = ['price' => 'min:0|max:20'];
   //$this->validate($request, $rules);
   $Travels->seatsAvailable=$request->seats;
	 $Travels->session_start=$request->date;
	 $Travels->save();

  }
  function show_session (){
	  $Travels = DB::table('travels')->get();
	  return view('layouts.sessions', compact('Travels'));
  }

 //--------------------------- PROFILE -------------------------- //
 //--------------------------- PROFILE -------------------------- //
 //--------------------------- PROFILE -------------------------- //


	function show_Profile (){
 		return view('layouts.update_profile');
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

  //--------------------------- FEEDBACK  ------------------------- //
  //--------------------------- FEEDBACK  ------------------------- //
  //--------------------------- FEEDBACK  ------------------------- //

  function show_feed (){
	 return view('layouts.add_feedback');
  }

  function show_feedback (){
	 $Feedback = DB::table('feedback')->get();
	 return view('layouts.feedbacks', compact('Feedback'));
  }

  function insert_feedback (Request $request){
    $Feedback= new Feedback;
    $Feedback->passenger_id=Auth::id();
	 //travel id ekle??
    $Feedback->comment=$request->comment;
    $Feedback->rating=$request->rating;
    $Feedback->save();
  }

//--------------------------- CAR  ------------------------- //
//--------------------------- CAR  ------------------------- //
//--------------------------- CAR  ------------------------- //

  function show_car (){
   return view('layouts.add_car');
  }

  function insert_car (Request $request){
	  //------------ CAR ------------- //
      $Car = new Car;
      $Car->driver_id=Auth::id();
      $Car->plate=$request->plate;

		//------------ COLOR ------------- //
      $Colors = new Color;
      $Colors->id=Auth::id();
      $Colors->color_name=$request->color;

		//------------ BRAND ------------- //
      $Brands = new Brand;
      $Brands->id=Auth::id();
      $Brands->brand_name=$request->brand;

		//------------ MODEL ------------- //
      $Models = new Modelv;
      $Models->id=Auth::id();
      $Models->model_name=$request->model;

      $Car->save();
      $Brands->save();
      $Models->save();
      $Colors->save();
    }


}
