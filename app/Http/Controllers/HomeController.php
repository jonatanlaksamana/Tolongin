<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idUserLogin = Auth::id();
        $testimonis = DB::table('testimonis')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'testimonis.idClient');
        })->get();
        $category = category::all();
      return view('index' , compact('category' , 'idUserLogin' , 'testimonis'));
    }

}
