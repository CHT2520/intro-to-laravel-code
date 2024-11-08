<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films')->insert(['title' => 'Jaws', 'year' => '1975', 'duration' => 124]);
        DB::table('films')->insert(['title' => 'Winter\'s Bone', 'year' => '2010', 'duration' => 100]);
        DB::table('films')->insert(['title' => 'Do The Right Thing', 'year' => '1989', 'duration' => 120]);
        DB::table('films')->insert(['title' => 'The Incredibles', 'year' => '2004', 'duration' => 15]);
        DB::table('films')->insert(['title' => 'The Godfather', 'year' => '1972', 'duration' => 177]);
        DB::table('films')->insert(['title' => 'Spirited Away', 'year' => '2001', 'duration' => 124]);
        DB::table('films')->insert(['title' => 'Moonlight', 'year' => '2016', 'duration' => 111]);
    }
}
