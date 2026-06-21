<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Premium Audio System Installation',
                'description' => 'Complete audio system installation with component speakers and amplifier in a Toyota Camry.',
                'category' => 'audio',
                'type' => 'image',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'LED Light Upgrade',
                'description' => 'Full LED light upgrade including headlights, fog lights, and interior lighting.',
                'category' => 'lighting',
                'type' => 'image',
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => '360° Camera System Installation',
                'description' => 'Complete 360° camera system installation for a luxury SUV.',
                'category' => 'camera',
                'type' => 'video',
                'order' => 3,
                'is_featured' => true,
            ],
            [
                'title' => 'Custom Door Visors Installation',
                'description' => 'Professional installation of custom door visors for ventilation and style.',
                'category' => 'accessories',
                'order' => 4,
            ],
            [
                'title' => 'Subwoofer Enclosure Build',
                'description' => 'Custom built subwoofer enclosure for deep, powerful bass.',
                'category' => 'audio',
                'order' => 5,
            ],
            [
                'title' => 'Fog Lights Installation',
                'description' => 'Professional fog lights installation for improved visibility in adverse weather.',
                'category' => 'lighting',
                'order' => 6,
            ],
        ];

        foreach ($items as $item) {
            Gallery::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'description' => $item['description'],
                'image' => null, // You can add sample images if available
                'category' => $item['category'],
                'type' => $item['type'] ?? 'image',
                'video_url' => $item['type'] ?? 'image' === 'video' ? 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' : null,
                'order' => $item['order'],
                'is_active' => true,
                'is_featured' => $item['is_featured'] ?? false,
                'views' => rand(100, 500),
            ]);
        }
    }
}
