<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Bose', 'description' => 'Premium audio brand known for quality sound'],
            ['name' => 'JBL', 'description' => 'Professional audio equipment manufacturer'],
            ['name' => 'Pioneer', 'description' => 'Leading car audio and electronics brand'],
            ['name' => 'Kenwood', 'description' => 'High-quality car audio systems'],
            ['name' => 'Sony', 'description' => 'Innovative car audio and entertainment solutions'],
            ['name' => 'Alpine', 'description' => 'Premium car audio and navigation systems'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}