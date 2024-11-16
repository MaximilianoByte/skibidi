<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personalplaza>
 */
class PersonalplazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tiponombramiento' => $this->faker->numberBetween(1, 10),
            'plaza_id' => $this->faker->numberBetween(1, 10), // IDs aleatorios
            'personal_id' => $this->faker->numberBetween(1, 10), // IDs aleatorios
       
        ];
    }
}
