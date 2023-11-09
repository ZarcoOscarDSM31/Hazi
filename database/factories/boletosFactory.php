<?php

namespace Database\Factories;

use App\Models\boletos;
use App\Models\cliente;
use App\Models\destino;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\boletos>
 */
class boletosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = boletos::class;

    public function definition(): array
    {
        return [
            'precio' =>fake()->randomNumber(2),
            'fecha_compra' =>fake()->date(),
            'fecha_salida' =>fake()->date(),
            'fk_id_cliente' => cliente::inRandomOrder()->first()->id_cliente,
            'fk_id_destino' => destino::inRandomOrder()->first()->id_destino,
        ];
    }
}
