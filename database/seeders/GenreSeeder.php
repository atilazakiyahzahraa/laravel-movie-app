<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shounen manga is an editorial category of Japanese comic'
        ]);
        Genre::create([
            'name' => 'Drama',
            'description' => 'a captivating literary genre that is brought to life through performance.'
        ]);
        Genre::create([
            'name' => 'School',
            'description' => 'a fiction genre centring on older pre-adolescent and adolescent school life, at its most popular in the first half of the twentieth century.'
        ]);
        
    }
}
