<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

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
        $user_login = User::find(Auth::id());
        return view('home' , compact(['user_login'])); 
    }

    public function update($id){
        $user_login = User::find(Auth::id());
        $user_login->update(
            [
                'profile_lengkap' => request('firstname') . " " . request('lastname') . " " . request('pt')
            ]
           
        );

    }

    // public function delete($id){
    //     $user_login = User::find(Auth::id());
    //     $user_login->update(
    //         Schema::dropIfExists('profile_lengkap')
    //     );

    // }
    public function destroy($id)
    {
        $user_login = User::find($id);
        $user_login->delete();
        //return Redirect::route('profile_lengkap');
    }
}
