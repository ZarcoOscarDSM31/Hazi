<?php

namespace Database\Factories;
use App\Models\cliente;
use App\Models\direccion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class clienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = cliente::class;
    public function definition(): array
    {
        return [
            'nombre' =>fake()->firstName(),
            'app' =>fake()->lastName(),
            'apm' =>fake()->lastName(),
            'sexo' =>fake()->randomElement(['Femenino','Masculino']),
            'fk_id_direccion' => direccion::inRandomOrder()->first()->id_direccion,
        ];
    }
}
