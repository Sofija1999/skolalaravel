<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

class UcenikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'adresa' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'profesor_id' => Profesor::factory()
        ];
    }
}
