<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\category;
use Hash;
use Auth;


class UserController extends Controller
{
    //
    public function profile(){

      $category=category::all();

      $idUserLogin = Auth::id();
      $user=user::find($idUserLogin);
        return view('userprofile',compact('category','user' , 'idUserLogin'));
    }

    public function update(){
     $user = user::find(Auth::id());

     $user->name = request('nama');
     $user->email = request('email');
     $user->password = hash::make(request('pass'));

     $user->save();
      return redirect('/userprofile/' . Auth::id() . "" );

    }

    public function updateFoto(){
      $user = user::find(Auth::id());
        $status = Request::hasFile('gantifoto');
        $image = request('gantifoto');
        $user->image =  time().".".$image->extension();
        $dest =  storage_path('/app/public');
        $image->move($dest,$user->image);
        $user->save();
        return redirect('/userprofile/' . Auth::id());
  }
}
