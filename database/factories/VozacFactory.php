<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VozacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name($gender = 'male'),
            'broj_telefona' => $this->faker->phoneNumber(),
            'godine' => $this->faker->numberBetween($min = 18, $max = 65)
        ];
    }
}
