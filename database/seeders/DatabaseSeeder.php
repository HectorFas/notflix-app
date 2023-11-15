<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
             FilmSeeder::class,
             TypeSeeder::class
        ]);


        $batman = Film::create([
            'title' => "batman 1",
            'resume' => "batman es muy malo",
            'duration' => 123,
            'release_date' => "2023-11-13 16:08:10",
            'price' => 10,
            'image' => "/portada.jpg",
            'video' => "/storage/video.mp4",
        ]);

        $usera = User::create([
            "name" => "a",
            "email" => "a@a.com",
            "password" => bcrypt('a')
        ]);

        $usera->films()->attach($batman);
    }
}
