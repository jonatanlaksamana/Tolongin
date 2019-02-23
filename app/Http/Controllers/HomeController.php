<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;

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
       $id =  Auth::id();
        $user_login = User::find($id);
        return view('home' , compact(['user_login']));
    }

    public function update($id){
        $id = Auth::id();
         $target =User::find($id);
         $target->update(
             [
                 'profile_lengkap' => request('firstname') ." " . request('lastname'). " ". request('lul')
             ]
         );
    }


    public function destroy($id)
{
    $id = Auth::id();
    $target =User::find($id);
     $target->delete();
     return redirect()->route('index');
}
}
