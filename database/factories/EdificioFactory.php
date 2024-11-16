<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\edificio>
 */
class EdificioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreedificio'=>fake()->randomElement(['Lab. de Sistemas y computacion', 'Centro de computo', 'Edificio K', 'Edificio D']),
            'nombrecorto'=>fake()->randomElement(['LSC', 'CC', 'K', 'D']),
        ];
    }
}
