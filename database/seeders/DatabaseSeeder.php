<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Filiere::factory()->create(
            [
                    'titre'=>'WFS',
                    'description'=>'Web Full Stack',
                    'created_at'=>now(),
                    'updated_at'=>now(),                
            ]
        );
        \App\Models\Filiere::factory()->create(
                [
                    'titre'=>'AM',
                    'description'=>'Application Mobile',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]
        );
        \App\Models\Groupe::factory()->create(
                [
                    'libelle' => 'WFS201',
                    'filiere_id' => 1,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
        );
        \App\Models\Groupe::factory()->create(
                [
                    'libelle' => 'WFS202',
                    'filiere_id' => 1,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
        );
        \App\Models\Groupe::factory()->create(
                [
                    'libelle' => 'AM201',
                    'filiere_id' => 2,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
        );
        \App\Models\Groupe::factory()->create(
                [
                    'libelle' => 'AM202',
                    'filiere_id' => 2,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
        );
        \App\Models\Groupe::factory()->create(
                [
                    'libelle' => 'AM203',
                    'filiere_id' => 2,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
        );

        // \App\Models\Filiere::factory(20)->create();
        // \App\Models\Groupe::factory(40)->create();
        \App\Models\Stagiaire::factory(400)->create();
        \App\Models\Formateur::factory(20)->create();
        $formateur1 = \App\Models\Formateur::find(1); 
        $formateur2 = \App\Models\Formateur::find(2);
        $groupe1 = \App\Models\Groupe::find(1);
        $groupe2 = \App\Models\Groupe::find(2);
        $groupe3 = \App\Models\Groupe::find(3);
        $groupe4 = \App\Models\Groupe::find(4);
        $groupe5 = \App\Models\Groupe::find(5);

        $formateur1->groupes()->attach($groupe1,
                                        [
                                            'annee_formation' => '2023-2024',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );
        $formateur1->groupes()->attach($groupe2,
                                        [
                                            'annee_formation' => '2022-2023',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );
        $formateur1->groupes()->attach($groupe3,
                                        [
                                            'annee_formation' => '2023-2024',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );
        $formateur2->groupes()->attach($groupe3,
                                        [
                                            'annee_formation' => '2020-2021',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );
        $formateur2->groupes()->attach($groupe4,
                                        [
                                            'annee_formation' => '2019-2020',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );
        $formateur2->groupes()->attach($groupe5,
                                        [
                                            'annee_formation' => '2023-2024',
                                            'created_at' => now(),
                                            'updated_at' => now()
                                        ]   
                                    );



        // $this->call(
        //     [
        //         FilieresTableSeeder::class,
        //         GroupesTableSeeder::class,
        //         StagiairesTableSeeder::class,
        //     ]
        //     );
    }
}
