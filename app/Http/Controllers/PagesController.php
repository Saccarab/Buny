<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about (){
      return view('pages/about');
    }

    function project (){
      return view('pages/project');
    }

    function contact (){
      return view('pages/contact');
    }
}
