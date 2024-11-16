<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lugares>
 */
class LugaresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombrelugar'=>fake()->randomElement(['Lab. Computo C', 'Lab. Computo D', 'Lab. Computo E', 'Lab. Computo F', 'Sala Valerdi',
        'K1','K2','K3','K4','K5','K6','D1','D2','D3','D4','D5','D6' ]),

        'nombrecorto'=>fake()->randomElement(['LCC', 'LCD', 'LCE', 'LCF', 'SV',
        'K1','K2','K3','K4','K5','K6','D1','D2','D3','D4','D5','D6' ]),

            'edificio_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
