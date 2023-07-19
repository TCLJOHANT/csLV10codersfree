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

    //por defecto se devuelve el id pero aqui se modifica para que debuelba ota cosa, en este caso el slug
    //esto para hacer una url amigable
    public function getRouteKeyName()
    {
        return 'slug'; 
    }
}
