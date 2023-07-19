<?php

namespace Database\Seeders;
use App\Models\Banda;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//seeder exclusivo para bandas
class BandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $banda = new Banda();
         $banda->name = 'NEFFEX';
         $banda->descripcion = 'De EU es una banda FAVAORIT por TCL';
         $banda->categoria = 'HipHop, Rap';
         $banda->save();
        //llamo clase Banda(en este caso modelo), que use metodo factory
        Banda::factory(30)->create(); //crear 20 registros

    }
}
