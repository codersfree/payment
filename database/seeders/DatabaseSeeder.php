<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('articles');

        Storage::makeDirectory('products');
        Storage::makeDirectory('articles');

        Product::factory(50)->create();
        Article::factory(50)->create();
    }
}
