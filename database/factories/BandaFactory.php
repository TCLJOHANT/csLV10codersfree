<?php
/* un factory en Laravel es una herramienta útil para generar datos de prueba de manera rápida y sencilla. Te permite definir
 la estructura y los atributos de tus modelos con datos falsos utilizando la biblioteca Faker.*/ 
namespace Database\Factories;
use App\Models\Banda; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banda>
 */
class BandaFactory extends Factory
{
    protected $model =Banda::class;
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $faker =$this->faker;
        return [
            //atributos de banda, usen metodo faker (de clase Factory)que a su vez sea oracion,parrafo etc
            'name'=> $faker->sentence(),
            'descripcion'=> $faker->paragraph(),
            'categoria'=> $faker->randomElement(['trap','regueton','rap']) 
        ];
    }
    
}
