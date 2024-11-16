<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'RFC' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'), // RFC simulado
            'nombres' => $this->faker->firstName,
            'apellidop' => $this->faker->lastName,
            'apellidom' => $this->faker->lastName,
            'licenciatura' => $this->faker->word,
            'lictit' => $this->faker->boolean, // Tinyint (1: true, 0: false)
            'especializacion' => $this->faker->word,
            'esptit' => $this->faker->boolean,
            'maestria' => $this->faker->word,
            'maetit' => $this->faker->boolean,
            'doctorado' => $this->faker->word,
            'doctit' => $this->faker->boolean,
            'fechaingsep' => $this->faker->date,
            'fechaingins' => $this->faker->date,
            'depto_id' => $this->faker->numberBetween(1, 10), // IDs aleatorios
            'puesto_id' => $this->faker->numberBetween(1, 10), // IDs aleatorios
        ];
    }
}
