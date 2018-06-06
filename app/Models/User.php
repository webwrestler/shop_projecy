<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password' , 'status', 'activation_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function create($user)
    {
        $create_acount = DB::table('users')->insert(
            ['name'             => $user['name'],
             'username'         => $user['username'],
             'email'            => $user['email'],
             'password'         => $user['password'],
             'activation_code'  => $user['activation_code']
        ]);

        $this->name = $user['name'];
        $this->username = $user['username'];
        $this->email = $user['email'];
        $this->password = $user['password'];
        $this->activation_code = $user['activation_code'];
        return $this;
    }

    public function isAdmin()
    {
        if($this->status == 1 )
        {
            return true;
        }
        return false;
    }

    public function validate(Request $request, $login)
    {
        die('ok');
    }


}
