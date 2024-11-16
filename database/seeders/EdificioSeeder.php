<?php

namespace Database\Seeders;

use App\Models\edificio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        edificio::factory()->count(10)->create();
    }
}
