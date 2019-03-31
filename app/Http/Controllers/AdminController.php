<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use DB;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    //



    public function index(){

        $User=User::all();
        $Order=Order::all();
        $joinTable=DB::table('requests')
        ->join('orders', function ($join) {
            $join->on('requests.idClient', '=', 'orders.idPemberiJasa');
        })
        ->get();
        return view('Admin.AdminPanel', compact('User','Order','joinTable'));

    }
    public function chart(){
        $user = User::find(Auth::id());
        return view('Admin/chart', compact('user') );

    }
    public function tables(){
        $user = User::find(Auth::id());

      return view('Admin.table', compact('user'));
    }

    public function form(){
        $user = User::find(Auth::id());

      return view('Admin/form', compact('user'));
    }
    public function map(){
        $user = User::find(Auth::id());
        return view ('Admin/map', compact('user'));

    }
    public function testimoni(){
        $user = User::find(Auth::id());
        $testimoni = DB::table('testimonis')->leftJoin('users', 'testimonis.idClient', '=', 'users.id')->get();
        return view ('Admin.testimoni', compact('user' , 'testimoni'));

    }



}
