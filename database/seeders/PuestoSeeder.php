<?php

namespace Database\Seeders;

use App\Models\puesto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        puesto::factory(100)->create();
    }
}
