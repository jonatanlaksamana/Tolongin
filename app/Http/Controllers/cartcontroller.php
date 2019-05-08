<?php

namespace App\Http\Controllers;

use App\jasa;
use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
    //

    function add($id){
        $idUserLogin = Auth::id();
        $jasa = jasa::find($id);
        $order = new order();
        $order->idClient = $idUserLogin;
        $order->idJasa = $jasa->id;
        $order->status =0;
        $order->save();
        \Cart::add($jasa->id, $jasa->jasaName, $jasa->harga, 1, array());
              return redirect()->route('cart');
            }
}
