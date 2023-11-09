<?php

namespace Database\Factories;

use App\Models\direccion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\direccion>
 */
class direccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = direccion::class;

    public function definition(): array
    {
        return [
            'calle' =>fake()->unique()->streetName(),
            'no_interior' =>fake()->randomNumber(5),
            'no_exterior'=>fake()->unique()->randomNumber(5),
            'cop'=>fake()->unique()->randomNumber(5),
        ];
    }
}
