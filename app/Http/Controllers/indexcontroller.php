<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Auth;
use App\testimoni;
use DB;


class indexcontroller extends Controller
{
    //
    function index(){
      $idUserLogin = Auth::id();
      $category = category::all();
      $testimonis = DB::table('testimonis')
      ->join('users', function ($join) {
          $join->on('users.id', '=', 'testimonis.idClient');
      })->get();
      return view('index' , compact('category' , 'idUserLogin', 'testimonis'));
    }
}
