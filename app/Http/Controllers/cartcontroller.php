<?php

namespace App\Http\Controllers;

use App\jasa;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    //

    function add($id){
        $jasa = jasa::find($id);
        \Cart::add($jasa->id, $jasa->jasaName, $jasa->harga, 1, array());
              return redirect()->route('cart');
            }
}
