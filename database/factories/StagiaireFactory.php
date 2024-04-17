<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupe;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->lastName(),
            'prenom'=>fake()->firstName(),
            'genre'=>fake()->randomElement(['F','M']),
            'date_naissance'=>'2000-01-01',
            'moyenne'=>rand(0,20),
            'groupe_id'=>Groupe::all()->random()->id,
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
