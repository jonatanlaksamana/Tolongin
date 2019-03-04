<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\category;
use Auth;
class UserController extends Controller
{
    //
    public function profile(){
      //$category=category::all();
      $idUserLogin = Auth::id();
      $user=user::find($idUserLogin);
        return view('userprofile',compact('category','user' , 'idUserLogin'));
    }

}
