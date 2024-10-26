<?php

namespace Database\Seeders;

use App\Models\alumno;
use App\Models\carrera;
use App\Models\depto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        depto::factory(5)
        ->has(carrera::factory(8)
                ->has(alumno::factory(10))
                )->create();
    }
}
