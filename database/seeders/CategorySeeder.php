<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Best Seller',
                'slug' => 'best-seller',
            ],
            [
                'name' => 'Smoothies',
                'slug' => 'smoothies',
            ],
            [
                'name' => 'Juices',
                'slug' => 'juices',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}