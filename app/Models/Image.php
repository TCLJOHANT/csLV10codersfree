<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = []; //permitir asignacion masiva
    use HasFactory;
    //RELACION UNO A UNO POLIMORFICA
    //la relación polimórfica permite que un modelo pueda pertenecer a varios modelos diferentes.
    //el name de funcion debe coindicir con el nombre inicial de los 
    //calmpos compuestos((['imageable_id','imageable_type']))
    public function imageable(){
        return $this->morphTo(); //morphTo()  que es proporcionado por Laravel para establecer una relación polimórfica.  
    }
}
