<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('Admin.AdminPanel');
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
