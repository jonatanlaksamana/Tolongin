<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;


class AdminController extends Controller
{
    //



    public function index(){
       $user = User::find(Auth::id());

        return view('Admin.AdminPanel' , compact('user'));
    }
    public function chart(){
        $user = User::find(Auth::id());
        return view('Admin/chart', compact('user') );

    }
    public function tables(){
        $user = User::find(Auth::id());

      return view('Admin.table', compact('user'));
    }
    public function adminpanel(){
        $user = User::find(Auth::id());

      return view('Admin/AdminPanel', compact('user'));
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
