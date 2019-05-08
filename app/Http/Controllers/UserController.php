<?php

namespace App\Http\Controllers;

use App\jasa;
use App\order;
use function PhpParser\filesInDir;
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


    public function updateorder($id){
        $order = order::find($id);
        $order->status = 1;
        $order->save();
        return redirect()->route('profileuser');

    }
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

        $idUserLogin = Auth::id();
        $user = User::find($idUserLogin);
        return view('user.testimoni' , compact('idUserLogin' , 'user'));
    
        
    }

    public function updatetestimoni(){
        $testimoni = new testimoni();
     $testimoni->idClient = Auth::id();
     $testimoni->isi = request('testimoni');
     $testimoni->save();
     return redirect()->route('home');

    }

    public function jasa(){

        $idUserLogin = Auth::id();
        $user = User::find($idUserLogin);
      return view('/jasa' , compact('idUserLogin' , 'user'));
  
      
  }
  
  public function checkout(){

      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
    return view('/checkout' , compact('idUserLogin','user'));
  }

  public function aboutus(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
    return view ('/about' , compact('idUserLogin' ,'user'));
  }
  public function contact(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
    return view ('/contact' , compact('idUserLogin' , 'user'));
  }
  public function product(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
      $jasa = jasa::paginate(5);
    return view ('/product' , compact('idUserLogin' , 'user' , 'jasa'));
  }

  public function ProfileUser(){
    $idUserLogin = Auth::id();
    $user = User::find($idUserLogin);
    $order =  DB::table('orders')
        ->join('jasas', 'jasas.id', '=', 'orders.idJasa')
        ->join('users', 'users.id', '=', 'orders.idClient')
        ->where('user_id', $idUserLogin)
        ->select('orders.id as orderId', 'orders.status', 'jasas.*', 'users.*')
        ->get();

    $jasa = jasa::where('user_id', $idUserLogin)->get();
  return view ('/ProfileUser' , compact('idUserLogin' , 'user' , 'order' , 'jasa'));
}
  public function productzoom(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
    return view ('/productzoom' , compact('idUserLogin' , 'user'));
  }
  public function propage(){
    $idUserLogin = Auth::id();
    $user = User::find($idUserLogin);
  return view ('/ProPage' , compact('idUserLogin' , 'user'));
}
  public function daftarjasa(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
    return view ('/DaftarJasa' , compact('idUserLogin' , 'user'));
  }
  
  public function cart(){
    $cartCollection = \Cart::getContent();
    $subTotal = \Cart::getSubTotal();
    $cartTotalQuantity = \Cart::getTotalQuantity();
    $idUserLogin = Auth::id();
    $user = User::find($idUserLogin);
    $cart = \Cart::getContent();
    $total = \Cart::getTotal();
    
    $category=category::all();

    return view('cart',compact('cartCollection','subTotal','cartTotalQuantity' , 'user' , 'category' , 'idUserLogin' , 'cart' , 'total' ));
        }

    public function cek(){
      $idlogin = Auth::id();
    $cartCollection = \Cart::getContent();
    $subTotall = \Cart::getSubTotal();
    $cartTotalQuantity = \Cart::getTotalQuantity();
    $idUserLogin = Auth::id();
    $user = User::find($idUserLogin);
    return view('checkout',compact('cartCollection','subTotall','cartTotalQuantity' , 'idUserLogin' ,'user'));
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
