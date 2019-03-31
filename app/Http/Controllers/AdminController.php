<?php

namespace App\Http\Controllers;


use App\User;
use App\Order;
use DB;
//alw
use App\Request;
use App\Chat;

class AdminController extends Controller
{
    //
    public function index(){
        $User=User::all();
        $Order=Order::all();
        $Chat=Chat::all();

        $joinTable=DB::table('requests')
        ->join('orders', function ($join) {
            $join->on('requests.idClient', '=', 'orders.idPemberiJasa');
        })
        ->get();
        //alw
        $joinTable1=DB::table('chats')
        ->join('users', 'users.id', '=', 'chats.idClient1')
        ->join('users', 'users.id', '=', 'chats.idClient2')
        ->get();        

        return view('Admin.AdminPanel', compact('User','Order','joinTable','joinTable1'));
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
