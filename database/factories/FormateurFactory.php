<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formateur>
 */
class FormateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule'=>random_int(10000,20000),
            'nom'=>fake()->lastName(),
            'prenom'=>fake()->firstName(),
            'genre'=>fake()->randomElement(['F','M']),
            'date_naissance'=>'2000-01-01',
            'salaire'=> 4000,
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
