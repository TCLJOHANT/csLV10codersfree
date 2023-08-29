<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute; //necesario para crear un mutador o accesor
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    protected function name():Attribute {
         return new Attribute(
            //(un accesor funciona cuando se hace consulta en base de datos) no modifica el valor en base de datos solo es para presentacion final
            get: fn($value)=> ucwords($value), //funcion flecha
            //(Un mutador es un método que define cómo se debe modificar un valor de atributo ANTES de guardarlo en la base de datos. )
            set: function($value){  
               return strtolower($value); //funcion normal
            }
        );
     }
     //RELACION UNO A UNO
     public function profile(){
        //filtre registro cuyo id coincida con el id actual luego traer el primer registro que encuentre
        return $this->hasOne('App\Models\Profile');
     }
     //RELACION  UNO A MUCHOS
     public function posts(){
        return $this->hasMany('App\Models\Post');
     }
     public function videos(){
        return $this->hasMany('App\Models\Video');
     }
     //RELACION MUCHO A MUCHOS
     public function roles(){
        return $this->belongsToMany('App\Models\Role');
     }
    
}
