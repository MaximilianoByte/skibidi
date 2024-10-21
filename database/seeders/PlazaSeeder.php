<?php

namespace Database\Seeders;

use App\Models\plaza;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        plaza::factory(100)->create();
    }
}
