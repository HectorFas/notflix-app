<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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


        User::create([
            "name" => "a",
            "email" => "a@a.com",
            "password" => '$2y$10$DvGSP4h/UY.N4hHxahNU3uiCvY0a023Ob3gtIkDqQAs/cnDchk1Uq'
        ]);
    }
}
