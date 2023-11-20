<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    static public function  register($params) : void {
        $u = new User();
        $u->fill([
            "username" => $params["username"],
            "email" => $params["email"],
            "password" => $params["password"]
        ]);
        $u->username = $params["username"];
        $u->email = $params["email"];
        $u->password =  password_hash($params["password"],PASSWORD_DEFAULT);
        $u->save();
    }
    protected $fillable = [
        "username",
        "email",
        "password"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
