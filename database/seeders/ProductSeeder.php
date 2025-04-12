<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Slim Matcha Bliss',
                'slug' => 'slim-matcha-bliss',
                'description' => 'Refreshing matcha blend with pineapple, banana, lime and oat',
                'image' => 'slim-matcha-bliss.png',
                'price' => 8.99,
                'is_best_seller' => true,
                'category_id' => 1, // Best Seller
                'ingredients' => json_encode(['Matcha', 'Pineapple', 'Banana', 'Lime', 'Oat']),
                'tags' => json_encode(['Matcha', 'Manis Manja', 'Fruits', 'Recommended', 'Vegetarian']),
            ],
            [
                'name' => 'Skinglow Elixir',
                'slug' => 'skinglow-elixir',
                'description' => 'Beautifying blend of strawberry, pineapple, lime, peach and mango',
                'image' => 'skinglow-elixir.png',
                'price' => 9.99,
                'is_best_seller' => true,
                'category_id' => 1, // Best Seller
                'ingredients' => json_encode(['Strawberry', 'Pineapple', 'Lime', 'Peach', 'Mango']),
                'tags' => json_encode(['Matcha', 'Manis Manja', 'Fruits', 'Recommended', 'Vegetarian']),
            ],
            [
                'name' => 'Pinacolada',
                'slug' => 'pinacolada',
                'description' => 'Tropical blend of matcha, pineapple, banana, lime and oat',
                'image' => 'pinacolada.png',
                'price' => 8.99,
                'is_best_seller' => true,
                'category_id' => 1, // Best Seller
                'ingredients' => json_encode(['Matcha', 'Pineapple', 'Banana', 'Lime', 'Oat']),
                'tags' => json_encode(['Matcha', 'Manis Manja', 'Fruits', 'Recommended', 'Vegetarian']),
            ],
            // Tambahkan produk lain sesuai kebutuhan
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}