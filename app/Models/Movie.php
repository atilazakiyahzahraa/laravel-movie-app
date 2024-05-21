<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizzare Advanture',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'School',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ],
        [
            'id' => 4,
            'title' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.'
        ],
        [
            'id' => 5,
            'title' => 'Jujutsu Kaisen',
            'poster' => 'movie-05.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'A world where Cursed Spirits feed on unsuspecting humans and fragments of the legendary and feared demon Ryomen Sukuna have been lost and scattered about.',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
