<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    use HasFactory;
   // protected $table = 'users'; //especifica la tabla de la base de datos que está asociada a ese modelo.

   //Asi evitando que un hacker que agregue un campo delicado en la web, no lo tome en cuenta
   // se utiliza para especificar los atributos que están protegidos y no se pueden asignar masivamente en un modelo
    protected $guarded = [];
}
