<?php

namespace Database\Seeders;

use App\Models\hora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hora::factory()->count(10)->create();
    }
}
