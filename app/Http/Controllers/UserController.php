<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class UserController extends Controller
{
    //
    public function profile(){
      $category=category::all();
        return view('userprofile',compact('category'));
    }

}
