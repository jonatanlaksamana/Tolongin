<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\User;
use Auth;

use Illuminate\Http\Request;
=======

use Illuminate\Http\Request;
use App\category;
>>>>>>> 43d9ce46d1151518e63a845e6a97219d009dbae1

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
<<<<<<< HEAD
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
=======
        $category = category::all();
      return view('home' , compact(['category']));
    }

>>>>>>> 43d9ce46d1151518e63a845e6a97219d009dbae1
}
