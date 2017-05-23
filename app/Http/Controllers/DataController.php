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
use App\Models;
use App\Color;
use App\Brand;
use App\Payment;


class DataController extends Controller
{

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
   $Travels->seatsAvailable=$request->seats;
	 $Travels->session_start=$request->date;
	 $Travels->save();

	 $Travels = DB::table('travels')
	 ->join('profiles', 'travels.driver_id', '=', 'profiles.id')
	 ->join('cars', 'travels.driver_id', '=', 'cars.driver_id')
	 ->join('users', 'travels.driver_id', '=', 'users.id')
	 ->select('travels.*','profiles.*')
	 ->get();
	 return view('layouts.sessions', compact('Travels'));
  }
  function show_session (){
		$Travels = DB::table('travels')
	  ->join('profiles', 'travels.driver_id', '=', 'profiles.id')
	  ->join('cars', 'travels.driver_id', '=', 'cars.driver_id')
	  ->join('users', 'travels.driver_id', '=', 'users.id')
	  ->select('travels.*','profiles.name','profiles.surname','profiles.session_completed','profiles.rating')
	  ->get();
	  return view('layouts.sessions', compact('Travels'));
  }

	public function show_session_details($id) {
		$Travels = DB::table('travels')

		->where('travels.id', '=', $id)
		->join('profiles', 'travels.driver_id', '=', 'profiles.id')
		->join('cars', 'travels.driver_id', '=', 'cars.driver_id')
		->join('brands', 'travels.driver_id', '=', 'Brands.id')
		->join('colors', 'travels.driver_id', '=', 'colors.id')
		->join('models', 'travels.driver_id', '=', 'models.id')
		->get();

		foreach ($Travels as $value){
		if($value->seatsAvailable <=0){
			echo 'Session is full!!';
		}
		else{
			DB::table('travels')->where('travels.id', '=', $id)->decrement('seatsAvailable');
			$userId = Auth::user()->id;
			$Users = DB::table('users')
			->where('users.id', '=', $userId)->decrement('users.balance',$value->price);

			$Pass = DB::table('passengers')
			->insert(['user_id' => $userId, 'travel_id' => $id ]);
			return view('layouts.session_details', compact('Travels'));
		}
	}
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
	  $result = $result . '' . $request->DOBYear;
	  $profile->date_of_birth = $result;
	  $profile->save();
		$profile = DB::table('profiles')
 	 ->where('profiles.id','=',Auth::id())
 	 ->join('users', 'profiles.id', '=', 'users.id')
 	 ->select('profiles.*','users.balance')
 	 ->get();
   	 return view('layouts.view_profile', compact('profile'));
		return view('layouts.view_profile');
  }

	function view_Profile (){
 	 $profile = DB::table('profiles')
	 ->where('profiles.id','=',Auth::id())
	 ->join('users', 'profiles.id', '=', 'users.id')
	 ->select('profiles.*','users.balance')
	 ->get();
  	 return view('layouts.view_profile', compact('profile'));
	}



  //--------------------------- FEEDBACK  ------------------------- //
  //--------------------------- FEEDBACK  ------------------------- //
  //--------------------------- FEEDBACK  ------------------------- //

  function show_feed (){
	 return view('layouts.add_feedback');
  }

  function show_feedback (){
	 $Feedback = DB::table('feedback')
   ->join('profiles', 'feedback.driver_id', '=', 'profiles.id')
	 ->select('profiles.*','feedback.*')
	 ->get();
	 return view('layouts.feedbacks', compact('Feedback'));
  }

  function insert_feedback (Request $request){
    $Feedback= new Feedback;
    $Feedback->passenger_id=Auth::id();
	 	$Feedback->driver_id=$request->driver_id;
    $Feedback->comment=$request->comment;
    $Feedback->rating=$request->rating;
    $Feedback->save();


  $profile = DB::table('profiles')
  ->where('profiles.id','=',$Feedback->driver_id)->increment('rating', $Feedback->rating);

  $profile = DB::table('profiles')
  ->where('profiles.id','=',$Feedback->driver_id)->increment('session_completed');

  $Feedback = DB::table('feedback')->join('profiles', 'feedback.driver_id', '=', 'profiles.id')
  ->select('profiles.*','feedback.*')
  ->get();
 	 return view('layouts.feedbacks', compact('Feedback'));
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
      $Models = new Models;
      $Models->id=Auth::id();
      $Models->model_name=$request->model;

      $Car->save();
      $Brands->save();
      $Models->save();
      $Colors->save();
			return view('layouts.add_travel');
    }




//--------------------------- PAYMENT  ------------------------- //
//--------------------------- PAYMENT  ------------------------- //
//--------------------------- PAYMENT  ------------------------- //

function insert_payment (Request $request){
      $Payment= new Payment;
      $Payment->user_id=Auth::id();
      $Payment->name_on_card=$request->name_on_card;
			$Payment->expiration_date=$request->exp_date;
      $Payment->credit_card_number=$request->credit_card_number;
      $Payment->cvc=$request->cvc;


			$result = $request->EDay;
		  $result .= "/";
		  $result = $result . '' . $request->EMonth;
		  $result .= "/";
		  $result = $result . '	' . $request->EYear;
		  $Payment->expiration_date=$result;
      $Payment->save();
			return view('layouts.add_balance');
}
		function show_payment(){
		    return view('layouts.payment');
		  }

		function insert_balance (Request $request){
			DB::table('users')->where('users.id', '=', Auth::id())->increment('balance', $request->balance);
			$Travels = DB::table('travels')
			->join('profiles', 'travels.driver_id', '=', 'profiles.id')
			->join('cars', 'travels.driver_id', '=', 'cars.driver_id')
			->join('users', 'travels.driver_id', '=', 'users.id')
			->select('travels.*','profiles.*')
			->get();
		 	return view('layouts.sessions', compact('Travels'));
		}

		function show_balance(){
				return view('layouts.add_balance');
			}
		}
