<?php

namespace Database\Seeders;

use App\Models\transporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        transporte::factory(20)->create();
    }
}
