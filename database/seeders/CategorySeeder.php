<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Speakers', 'description' => 'High-quality car speakers for crystal clear sound'],
            ['name' => 'Subwoofers', 'description' => 'Deep bass subwoofers for powerful low frequencies'],
            ['name' => 'Amplifiers', 'description' => 'Powerful amplifiers to boost your audio system'],
            ['name' => 'Head Units', 'description' => 'Advanced head units with modern features'],
            ['name' => 'Accessories', 'description' => 'Essential car audio accessories'],
            ['name' => 'Wiring Kits', 'description' => 'Complete wiring kits for professional installation'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}