<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GroupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Groupes')->insert(
            [
                [
                    'libelle' => 'WFS201',
                    'filiere_id' => 1,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'WFS202',
                    'filiere_id' => 1,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'AM201',
                    'filiere_id' => 2,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'AM202',
                    'filiere_id' => 2,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'DEV101',
                    'filiere_id' => 3,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'DEV102',
                    'filiere_id' => 3,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'ID101',
                    'filiere_id' => 4,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ],
                [
                    'libelle' => 'ID102',
                    'filiere_id' => 4,
                    'created_at'=>now(),
                    'updated_at'=>now(), 
                ]
            ]
            );
    }
}
