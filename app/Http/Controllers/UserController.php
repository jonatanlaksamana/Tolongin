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
      $editName = request('nama');
      $email = request('email');
      $pass = request('pass');
      $alamat = request('alamat');
      $nohp = request('nohp');
      if($editName != ''){
        $user->name = $editName;
      }
      if($alamat != ''){
        $user->alamat = $alamat;
      }
      if($nohp != ''){
        $user->phone_number = $nohp;
      }
      if($email != ''){
        $user->email = $email;
      }
      if($pass != ''){
        $user->password = hash::make($pass);
      }
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
