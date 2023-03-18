<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conducteurs>
 */
class ConducteursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->firstNameFemale(),
            'lage' => fake()->numberBetween($min = 20, $max = 60),
            'n_cin' => fake()->numerify('SH ######'),
            'telephone' => fake()->e164PhoneNumber(),
            'adresse' => fake()->streetAddress(),
        ];
    }
}
