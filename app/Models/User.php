<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeName($query, $name){

        if($name){
        return $query->join("roles as roll", "users.id_rol", "=", "roll.id")->select("users.id","users.name", "users.email","roll.rol as id_rol","users.created_at")->where('name','LIKE', "%$name%");
    }else{
       
        
      }
    
    }

    public function scopeEmail($query, $email){

        if($email){
        return $query->join("roles as roll", "users.id_rol", "=", "roll.id")->select("users.id","users.name","users.email","roll.rol as id_rol","users.created_at")->where('email','LIKE', "%$email%");

    }else{
       
 
       }

    }

    // public static function search($name = '', $email =''){

    //     if($name= '' or $email= ''){
    //          $resultado = User::join("roles", "users.id_rol", "=", "roles.id")
    //         ->select("users.id","users.name", "users.email","roles.rol as rol","users.created_at")
    //         ->orderBy('users.id', 'asc')
    //         ->paginate(5);
    //         return $resultado;
    //     }else{
    
    //     $resultado = User::join("roles", "users.id_rol", "=", "roles.id")
    //         ->select("users.id","users.name","users.email", "roles.rol as rol","users.created_at")
    //         ->where('name','like',"%$name%")
    //         ->orWhere('email','like',"%$email%")
    //         ->orderBy('users.id', 'asc')
    //         ->paginate(5);
    //         return $resultado;
    //     }
    // }
}
