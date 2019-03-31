<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use DB;

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
return view('Admin/chart');

    }
    public function tables(){

      return view('Admin/table');
    }
    public function adminpanel(){

      return view('Admin/AdminPanel');
    }
    public function form(){

      return view('Admin/form');
    }
    public function map(){
return view ('Admin/map');

    }
}
