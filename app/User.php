<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellido','direccion','telefono','avatar','rol','foto2','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
      public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
      public function scopeSearch($query, $name)
   {
  return  $query->where('name', 'LIKE', "%$name%");

   }

   public function pedidos(){
    return $this->hasMany('App\Pedido');
   }

   
}
