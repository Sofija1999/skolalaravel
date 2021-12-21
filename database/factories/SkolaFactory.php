<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'grad' => $this->faker->city(),
            'adresa' => $this->faker->streetAddress(),
            'skola_email' => $this->faker->unique()->email(),
            'direktor' => $this->faker->name()
        ];
    }
}
