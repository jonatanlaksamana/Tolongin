<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use DB;
//alw
use App\Request;
use App\chat;
use App\testimoni;


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

        $total = $orders->sum('harga');
        return view('Admin.AdminPanel', compact('User','joinTable','Chat','orders' , 'total'));
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
    public function testimoni(){
        $testimoni = DB::table('testimonis')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'testimonis.idClient');
            })->get();


        return view('admin.testimoni' , compact('testimoni'));
    }
    public function users(){
        $users = User::all();
        return view('Admin.UserTable' , compact('users'));
    }
    public function deletetestimoni($id){
        $target = testimoni::find($id);
        $target->delete();
        return redirect()->route('admin.testimoni');


    }

    public function delete($id){
        $target = order::find($id);
        $target->delete();
        return redirect()->back();
    }
}
