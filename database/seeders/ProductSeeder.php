<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = [
            [
                'name' => 'Premium 6.5" Component Speakers',
                'short_description' => 'High-fidelity component speaker system with crystal clear audio',
                'description' => 'Experience crystal clear audio with our premium component speakers. Features silk dome tweeters and polypropylene cones for exceptional sound quality and durability.',
                'price' => 299.99,
                'compare_price' => 399.99,
                'stock_quantity' => 25,
                'is_featured' => true,
                'weight' => 2.5,
            ],
            [
                'name' => '12" Subwoofer with Enclosure',
                'short_description' => 'Powerful bass with custom-tuned enclosure',
                'description' => 'Deep, punchy bass that will transform your listening experience. Includes a custom-tuned enclosure for optimal performance and maximum bass response.',
                'price' => 449.99,
                'compare_price' => 549.99,
                'stock_quantity' => 15,
                'is_featured' => true,
                'weight' => 15.0,
            ],
            [
                'name' => '4-Channel Amplifier 1000W',
                'short_description' => 'High-power 4-channel amplifier for crystal clear sound',
                'description' => 'Deliver clear, powerful sound to all your speakers with this high-efficiency 4-channel amplifier. Perfect for powering component speakers and subwoofers.',
                'price' => 379.99,
                'compare_price' => null,
                'stock_quantity' => 20,
                'is_featured' => false,
                'weight' => 3.0,
            ],
            [
                'name' => 'Wireless CarPlay Head Unit',
                'short_description' => 'Advanced 7" HD touchscreen with wireless CarPlay',
                'description' => 'Enjoy seamless smartphone integration with wireless Apple CarPlay and Android Auto. Features a 7-inch HD touchscreen display with intuitive controls.',
                'price' => 499.99,
                'compare_price' => 599.99,
                'stock_quantity' => 10,
                'is_featured' => true,
                'weight' => 1.5,
            ],
            [
                'name' => 'Sound Deadening Kit',
                'short_description' => 'Complete sound deadening kit for 4 doors',
                'description' => 'Reduce road noise and improve audio quality with our premium sound deadening kit. Includes enough material for 4 doors with professional-grade butyl rubber.',
                'price' => 159.99,
                'compare_price' => null,
                'stock_quantity' => 30,
                'is_featured' => false,
                'weight' => 5.0,
            ],
            [
                'name' => '8" Shallow Mount Subwoofer',
                'short_description' => 'Powerful subwoofer designed for tight spaces',
                'description' => 'Perfect for vehicles with limited space. This shallow mount subwoofer delivers impressive bass without requiring a large enclosure.',
                'price' => 249.99,
                'compare_price' => 299.99,
                'stock_quantity' => 18,
                'is_featured' => false,
                'weight' => 8.0,
            ],
        ];

        foreach ($products as $index => $productData) {
            $category = $categories->get($index % count($categories));
            $brand = $brands->get($index % count($brands));

            Product::create([
                'category_id' => $category->id,
                'brand_id' => $brand->id,
                'name' => $productData['name'],
                'slug' => \Illuminate\Support\Str::slug($productData['name']),
                'short_description' => $productData['short_description'],
                'description' => $productData['description'],
                'price' => $productData['price'],
                'compare_price' => $productData['compare_price'],
                'sku' => 'SKU-' . strtoupper(\Illuminate\Support\Str::random(8)),
                'stock_quantity' => $productData['stock_quantity'],
                'main_image' => null,
                'images' => null,
                'specifications' => null,
                'is_featured' => $productData['is_featured'],
                'is_active' => true,
                'in_stock' => true,
                'views' => 0,
                'weight' => $productData['weight'],
            ]);
        }
    }
}