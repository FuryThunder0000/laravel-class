<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filieres')->insert(
            [
                'titre'=>'WFS',
                'description'=>'Web Full Stack',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
        DB::table('filieres')->insert(
            [
                'titre'=>'AM',
                'description'=>'Application Mobile',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
        DB::table('filieres')->insert(
            [
                'titre'=>'DD',
                'description'=>'Developpement Digital',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
        DB::table('filieres')->insert(
            [
                'titre'=>'ID',
                'description'=>'Infrastucture Digital',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
    }
}
