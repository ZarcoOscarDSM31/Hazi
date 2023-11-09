<?php

namespace Database\Factories;

use App\Models\destino;
use App\Models\transporte;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transporte>
 */
class transporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = transporte::class;


    public function definition(): array
    {
        return [
            'capacidad' =>fake()->randomNumber(2),
            'peso' =>fake()->randomNumber(2),
            'no_asiento'=>fake()->unique()->randomNumber(2),
            'fk_id_destino' => destino::inRandomOrder()->first()->id_destino,

        ];
    }
}
