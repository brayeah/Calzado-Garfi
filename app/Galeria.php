<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable=[
         'estilo',
         'color',
        'precio',
        'foto',
        'genero'
    ];
      public function scopeSearch($query, $estilo)
   {
  return  $query->where('estilo', 'LIKE', "%$estilo");

   }
   		
}
