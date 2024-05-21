<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizzare Advanture',
            'user' => '@atila',
            'rating' => '7,5/10',
            'date' => '2024-12-21'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'user' => '@zakiyah',
            'rating' => '8/10',
            'date' => '2021-08-02'
        ],
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user' => '@zahrah',
            'rating' => '7/10',
            'date' => '2023-02-14'
        ],
        [
            'id' => 4,
            'movie' => 'Spy x Family',
            'user' => '@wonu',
            'rating' => '9,5/10',
            'date' => '2022-07-06'
        ],
        [
            'id' => 5,
            'movie' => 'Jujutsu Kaisen',
            'user' => '@rui',
            'rating' => '9/10',
            'date' => '2020-04-23'
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
