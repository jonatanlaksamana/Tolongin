<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\category;
use Auth;
use App\testimoni;
use DB;
use App\User;
use App\jasa;
use App\Veritrans\Veritrans;


class indexcontroller extends Controller
{
    public function __construct(){   
        Veritrans::$serverKey = 'SB-Mid-server-8gxP9I8OPoWiGw0NJg2R3bdR';
        Veritrans::$isProduction = false;
    }
    //
    function index(){
      $idUserLogin = Auth::id();
      $user = User::find($idUserLogin);
      $category = category::all();
      $testimonis = DB::table('testimonis')
      ->join('users', function ($join) {
          $join->on('users.id', '=', 'testimonis.idClient');
      })->get();

    

      $jasas = jasa::all();
      return view('index' , compact('category' , 'idUserLogin', 'testimonis' , 'user','jasas'));
    }
    public function kategori(){
        $idUserLogin = Auth::id();
        $user = User::find($idUserLogin);
        $category = category::all();
        $testimonis = DB::table('testimonis')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'testimonis.idClient');
            })->get();
        $cart = Cart::getContent();
        return view('cart',compact ('category', 'idUserLogin', 'testimonis' ,'user' , 'cart'));
    }
}
