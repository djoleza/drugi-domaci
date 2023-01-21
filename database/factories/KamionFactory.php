<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reg_broj' => $this->faker->numerify('REG-######'),
            'kilometraza' => $this->faker->numberBetween($min = 0, $max = 1500000),
            'marka' => $this->faker->cityPrefix(),
            'vozac_id' => new VozacFactory()
        ];
    }
}
