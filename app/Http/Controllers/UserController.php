<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\category;
use Hash;
use Auth;
use DB;
use App\testimoni;
use File;

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
        $dest =  storage_path('/app/public');
        File::delete($dest. "/" . $user->image ."");
        $user->image =  time().".".$image->extension();
        $image->move($dest,$user->image);
        $user->save();
        return redirect('/userprofile/' . Auth::id());
  }

    public function testimoni(){
  
        return view('user.testimoni');
    
        
    }

    public function updatetestimoni(){
        $testimoni = new testimoni();
     $testimoni->idClient = Auth::id();
     $testimoni->isi = request('testimoni');
     $testimoni->save();
     return redirect()->route('home');

    }
}
