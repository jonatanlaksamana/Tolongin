<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    const admin = 'admin';
    const deafult = 'biasa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 'email', 'password', 'profile_lengkap', 'member', 'reputasi' , 'image', 'alamat'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function isAdmin(){
         return $this->member === self::admin;
     }

     public function isAdmin(){

if ($this->tipe === 'admin'){
return true;


}
else {
return false;

}

     }
}
