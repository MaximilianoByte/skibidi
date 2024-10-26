<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\depto>
 */
class DeptoFactory extends Factory
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
            'iddepto'=>fake()->randomNumber(2, true),
            'nombredepto'=>$titulo,
            'nombremediano' => fake()->lexify(str_repeat('?', 15)), // Genera 15 letras aleatorias
            'nombrecorto'  => fake()->lexify(str_repeat('?', 5)),//traer 5 letras del propio titulo
        ];
    }
}
