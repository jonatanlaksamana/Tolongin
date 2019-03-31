<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use DB;
//alw
use App\Request;
use App\chat;

class AdminController extends Controller
{
    //
    public function index(){
        $User=User::all();
        $Chat=chat::all();

        $joinTable=DB::table('jasas')
        ->join('orders', function ($join) {
            $join->on('jasas.user_id', '=', 'orders.idJasa');
        })
        ->get();
        
        $orders = DB::table('orders')
            ->join('jasas', 'jasas.id', '=', 'orders.idJasa')
            ->join('users', 'users.id', '=', 'jasas.user_id')
            ->get();
        return view('Admin.AdminPanel', compact('User','joinTable','Chat','orders'));
    }
    public function chart(){
        return view('Admin/chart');

    }
    public function tables(){
        $orders = DB::table('orders')
        ->join('jasas', 'jasas.id', '=', 'orders.idJasa')
        ->join('users', 'users.id', '=', 'jasas.user_id')
        ->get();
    
      return view('Admin/table', compact('orders'));
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
