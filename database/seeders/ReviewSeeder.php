<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reviewseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => '@everyonewoo',
            'rating' => '7/10',
            'date' => '2023-12-21'
        ]);
        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => '@onyourmark',
            'rating' => '8,5/10',
            'date' => '2019-02-14'
        ]);
        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => '@dd.bblue',
            'rating' => '9/10',
            'date' => '2021-10-01'
        ]);
        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => '@yellow_3to3',
            'rating' => '9.3/10',
            'date' => '2022-08-02'
        ]);
        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => '@the.andypark',
            'rating' => '8.2/10',
            'date' => '2024-04-23'
        ]);
    }
}
