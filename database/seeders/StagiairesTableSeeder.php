<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Groupe;

class StagiairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i=0; $i < 20; $i++) { 
        DB::table('stagiaires')->insert(
            [
                'nom'=>fake()->lastName(),
                'prenom'=>fake()->firstName(),
                'genre'=>fake()->randomElement(['F','M']),
                'date_naissance'=>'2000-01-01',
                'moyenne'=>rand(0,20),
                'groupe_id'=>Groupe::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now() 
            ]
            );
       }
    }
}
