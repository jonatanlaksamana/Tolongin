<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class indexcontroller extends Controller
{
    //
    function index(){
      $category = category::all();
      return view('index' , compact(['category']));
    }
}
