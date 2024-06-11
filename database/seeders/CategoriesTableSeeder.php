<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  protected $fillable = ['name']; create 10 categories
        Category::create(['name' => 'Geography']);
        Category::create(['name' => 'History']);
        Category::create(['name' => 'Science']);
        Category::create(['name' => 'Literature']);
        Category::create(['name' => 'Sports']);
        Category::create(['name' => 'Entertainment']);
        Category::create(['name' => 'Art']);
        Category::create(['name' => 'Music']);
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'Movies']);
        Category::create(['name' => 'Food and Drink']);
        Category::create(['name' => 'Language']);

    }
}
