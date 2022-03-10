<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::insert(['name' => 'Fantsy','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Sci-Fi','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Mystery','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Thriller','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Romance','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Westerns','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Dystopian','description' => 'lorem ipsum ...']);
        Category::insert(['name' => 'Contemporary','description' => 'lorem ipsum ...']);
    }
}
