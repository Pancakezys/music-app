<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
                'title' => 'Hero',
                'artist' => 'Skillet',
                'src' =>'Audio/Hero.mp3',
               'cover' => 'images/dj1.jpg',
        ]);

        Song::create([
            'title' => 'Hall of Fame',
            'artist' => 'Nana Kwabena',
            'src' =>'Audio/Hall of Fame.mp3',
            'cover' => 'images/dj2.jpg'
    ]);
           
}
}
