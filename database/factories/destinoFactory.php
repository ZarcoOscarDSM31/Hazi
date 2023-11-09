<?php

namespace Database\Factories;

use App\Models\destino;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\destino>
 */
class destinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = destino::class;

    public function definition(): array
    {
        return [
            'destino' => fake()->unique()->streetName(),
        ];
    }
}
