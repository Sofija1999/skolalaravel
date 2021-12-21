<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skola;

class ProfesorFactory extends Factory
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
            'jmbg' => $this->faker->numerify('##########'),
            'email' => $this->faker->email(),
            'adresa' => $this->faker->streetAddress(),
            'predmet' => $this->faker->randomElement($array = array(
                'Srpski jezik', 'Matematika', 'Fizika', 'Informatika', 'Biologija',
                'Geografija', 'Hemija', 'Engleski jezik', 'Nemacki jezik', 'Francuski jezik', 'Spanski jezik', 'Ruski jezik', 'Fizicko vaspitanje'
            )),
            'skola_id' => Skola::factory()

        ];
    }
}
