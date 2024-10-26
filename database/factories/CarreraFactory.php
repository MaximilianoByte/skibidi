<?php

namespace Database\Factories;

use App\Models\depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->jobTitle();
        return [
            'idcarrera'=>fake()->bothify("????####"),
            'nombrecarrera'=>$titulo,
            'nombremediano' => fake()->lexify(str_repeat('?', 15)), // Genera 15 letras aleatorias
            'nombrecorto' => fake()->lexify(str_repeat('?', 5)),//traer 5 letras del propio titulo
            "depto_id"=>depto::factory(),
        ];
    }
}
