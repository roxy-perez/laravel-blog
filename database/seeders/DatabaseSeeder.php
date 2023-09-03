<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Eliminar carpeta articles y categories y recrearlas
        Storage::deleteDirectory('articles');
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('profiles');

        Storage::makeDirectory('articles');
        Storage::makeDirectory('categories');
        Storage::makeDirectory('profiles');

        //llamada a los seeders, que luego usan los favtories en su Seeder
        $this->call(UserSeeder::class);

        //llamada a los factories, aquí es más directo
        Category::factory(8)->create();
        Article::factory(20)->create();
        Comment::factory(20)->create();
        Profile::factory(12)->create();
    }
}
