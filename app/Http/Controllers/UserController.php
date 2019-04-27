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

    public function jasa(){
  
      return view('/jasa');
  
      
  }
  
  public function checkout(){

    return view('/checkout');
  }

  public function aboutus(){
    return view ('/about');
  }
  public function contact(){
    return view ('/contact');
  }
  public function product(){
    return view ('/product');
  }
  public function productzoom(){
    return view ('/productzoom');
  }
  public function daftarjasa(){
    return view ('/DaftarJasa');
  }
  
  public function cart(){
    $cartCollection = \Cart::getContent();
    $subTotal = \Cart::getSubTotal();
    $cartTotalQuantity = \Cart::getTotalQuantity();
    return view('cart',compact('cartCollection','subTotal','cartTotalQuantity'));
        }

    public function cek(){
      $idlogin = Auth::id();
    $cartCollection = \Cart::getContent();
    $subTotall = \Cart::getSubTotal();
    $cartTotalQuantity = \Cart::getTotalQuantity();
    return view('checkout',compact('cartCollection','subTotall','cartTotalQuantity'));
  }
  public function addTransaksi2(){
    $area= new transaksi;
    $idlogin = Auth::id();
    $area -> total = \Cart::getSubTotal();
    $area -> jumlahBarang =  \Cart::getTotalQuantity();
    $area -> idUser = $idlogin;
    $area -> status = 'belum bayar';
    $area -> alamat = \request('alamat');
    if($area -> save()){
      return redirect()->route('bayar');
    }
    else{
      echo 'fail';
    }
  }
}
