<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = array('Director', 'Docente', 'Administrativo');
        return [
           'nombre' => fake()->jobTitle(),
           'tipo' => fake()->randomElement($tipos)

            
        ];
    }
}
