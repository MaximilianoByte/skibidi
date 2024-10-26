<?php

namespace Database\Factories;

use App\Models\carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noctrl'=>fake()->bothify("########"),
            'nombre'=>fake()->name(),
            'apellido'=>fake()->lastName(),
            'apellidom'=>fake()->lastName(),
            'sexo'=>fake()->randomElement(['M', 'F']),
            'email'=>fake()->email(),
            'carrera_id'=>carrera::factory(),
        ];
    }
}
