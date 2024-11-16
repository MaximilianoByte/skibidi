<?php

namespace Database\Seeders;

use App\Models\personalplaza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalplazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        personalplaza::factory()->count(10)->create();
    }
}
