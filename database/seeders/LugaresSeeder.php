<?php

namespace Database\Seeders;

use App\Models\lugares;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        lugares::factory()->count(10)->create();
    }
}
