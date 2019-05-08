<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use DB;
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

    public function deleteUser($id){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $user = User::find($id);
        $user->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect()->back();
    }
    public function tables(){


        $orders = DB::select("   SELECT orders.id , jasaName,users.name,harga from orders  join jasas on  orders.idJasa = jasas.id join users on users.id = jasas.user_id where orders.status = 0");
        $ordersAcc = DB::select("   SELECT orders.id , jasaName,users.name,harga from orders  join jasas on  orders.idJasa = jasas.id join users on users.id = jasas.user_id where orders.status = 1");
        $total = DB::select("   SELECT sum(harga) as total from orders  join jasas on  orders.idJasa = jasas.id join users on users.id = jasas.user_id where orders.status = 1");
    
      return view('Admin/table', compact('orders' , 'ordersAcc' , 'total'));
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
