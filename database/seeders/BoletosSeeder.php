<?php

namespace Database\Seeders;

use App\Models\boletos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoletosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        boletos::factory(10)->create();
    }
}
