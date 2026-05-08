<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Laptops',     'slug' => 'laptops',     'icon' => '💻', 'description' => 'Powerful laptops for work, creativity, and gaming.'],
            ['name' => 'Phones',      'slug' => 'phones',      'icon' => '📱', 'description' => 'Latest smartphones from top manufacturers.'],
            ['name' => 'Audio',       'slug' => 'audio',       'icon' => '🎧', 'description' => 'Headphones, earbuds, and speakers for audiophiles.'],
            ['name' => 'Gaming',      'slug' => 'gaming',      'icon' => '🎮', 'description' => 'Consoles, accessories, and gear for gamers.'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'icon' => '⌚', 'description' => 'Smart watches, chargers, storage, and more.'],
            ['name' => 'Smart Home',  'slug' => 'smart-home',  'icon' => '🏠', 'description' => 'Speakers, displays, and smart devices for your home.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
