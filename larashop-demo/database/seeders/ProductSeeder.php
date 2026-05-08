<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Laptops
            [
                'category' => 'laptops',
                'name' => 'MacBook Pro 16"',
                'slug' => 'macbook-pro-16',
                'description' => 'The most powerful MacBook Pro ever. With M3 Max chip, up to 128GB unified memory, and an incredible Liquid Retina XDR display — built for developers, designers, and creators.',
                'price' => 2499.00,
                'image_url' => 'https://picsum.photos/seed/macbook-pro/800/600',
                'rating' => 4.9,
                'reviews_count' => 2847,
                'is_featured' => true,
            ],
            [
                'category' => 'laptops',
                'name' => 'Dell XPS 15',
                'slug' => 'dell-xps-15',
                'description' => 'A stunning 15.6" OLED touchscreen, 13th Gen Intel Core i9, and NVIDIA GeForce RTX 4070 in a sleek, premium aluminum chassis. The benchmark for Windows laptops.',
                'price' => 1899.00,
                'image_url' => 'https://picsum.photos/seed/dell-xps/800/600',
                'rating' => 4.7,
                'reviews_count' => 1532,
                'is_featured' => true,
            ],
            [
                'category' => 'laptops',
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'slug' => 'thinkpad-x1-carbon',
                'description' => 'Ultra-light at just 1.12kg, the ThinkPad X1 Carbon features a 14" IPS display, 13th Gen Intel Core, and legendary ThinkPad reliability for business professionals.',
                'price' => 1649.00,
                'image_url' => 'https://picsum.photos/seed/thinkpad-x1/800/600',
                'rating' => 4.6,
                'reviews_count' => 984,
                'is_featured' => false,
            ],
            [
                'category' => 'laptops',
                'name' => 'ASUS ROG Zephyrus G14',
                'slug' => 'asus-rog-zephyrus-g14',
                'description' => 'Compact gaming powerhouse with AMD Ryzen 9, NVIDIA RTX 4060, and a stunning 165Hz OLED display. Dominate any game without sacrificing portability.',
                'price' => 1299.00,
                'image_url' => 'https://picsum.photos/seed/asus-rog/800/600',
                'rating' => 4.8,
                'reviews_count' => 1201,
                'is_featured' => true,
            ],
            [
                'category' => 'laptops',
                'name' => 'HP Spectre x360',
                'slug' => 'hp-spectre-x360',
                'description' => 'A stunning 2-in-1 convertible with OLED display, Intel Evo certification, and a premium gem-cut design. Work and create in any mode — laptop, tent, or tablet.',
                'price' => 1449.00,
                'image_url' => 'https://picsum.photos/seed/hp-spectre/800/600',
                'rating' => 4.5,
                'reviews_count' => 763,
                'is_featured' => false,
            ],

            // Phones
            [
                'category' => 'phones',
                'name' => 'iPhone 15 Pro Max',
                'slug' => 'iphone-15-pro-max',
                'description' => 'Forged in titanium and featuring the A17 Pro chip, a customizable Action button, and the most powerful iPhone camera system ever. Pro. Beyond.',
                'price' => 1199.00,
                'image_url' => 'https://picsum.photos/seed/iphone-15/800/600',
                'rating' => 4.9,
                'reviews_count' => 5621,
                'is_featured' => true,
            ],
            [
                'category' => 'phones',
                'name' => 'Samsung Galaxy S24 Ultra',
                'slug' => 'samsung-galaxy-s24-ultra',
                'description' => 'The ultimate Galaxy experience with built-in S Pen, 200MP camera, and Galaxy AI features. Snapdragon 8 Gen 3 delivers top-tier performance for professionals.',
                'price' => 1299.00,
                'image_url' => 'https://picsum.photos/seed/samsung-s24/800/600',
                'rating' => 4.8,
                'reviews_count' => 4103,
                'is_featured' => true,
            ],
            [
                'category' => 'phones',
                'name' => 'Google Pixel 8 Pro',
                'slug' => 'google-pixel-8-pro',
                'description' => 'Google Tensor G3 powers the most helpful phone ever. Best-in-class AI photography, 7 years of OS updates, and temperature sensor make it uniquely intelligent.',
                'price' => 999.00,
                'image_url' => 'https://picsum.photos/seed/pixel-8/800/600',
                'rating' => 4.7,
                'reviews_count' => 2198,
                'is_featured' => false,
            ],
            [
                'category' => 'phones',
                'name' => 'OnePlus 12',
                'slug' => 'oneplus-12',
                'description' => 'Snapdragon 8 Gen 3, 100W SUPERVOOC charging, and Hasselblad-tuned cameras. A flagship-killer that charges from 0 to 100% in just 26 minutes.',
                'price' => 799.00,
                'image_url' => 'https://picsum.photos/seed/oneplus-12/800/600',
                'rating' => 4.6,
                'reviews_count' => 1087,
                'is_featured' => false,
            ],
            [
                'category' => 'phones',
                'name' => 'Nothing Phone 2',
                'slug' => 'nothing-phone-2',
                'description' => 'Iconic Glyph Interface, clean Nothing OS, and Snapdragon 8+ Gen 1. A refreshingly transparent smartphone that stands out from the crowd.',
                'price' => 599.00,
                'image_url' => 'https://picsum.photos/seed/nothing-phone/800/600',
                'rating' => 4.4,
                'reviews_count' => 876,
                'is_featured' => false,
            ],

            // Audio
            [
                'category' => 'audio',
                'name' => 'Sony WH-1000XM5',
                'slug' => 'sony-wh-1000xm5',
                'description' => 'Industry-leading noise cancellation with eight microphones and two processors. 30-hour battery, multipoint connection, and crystal-clear call quality.',
                'price' => 349.00,
                'image_url' => 'https://picsum.photos/seed/sony-xm5/800/600',
                'rating' => 4.9,
                'reviews_count' => 8934,
                'is_featured' => true,
            ],
            [
                'category' => 'audio',
                'name' => 'AirPods Pro 2nd Gen',
                'slug' => 'airpods-pro-2',
                'description' => 'H2 chip delivers next-level Active Noise Cancellation and Transparency mode. Adaptive Audio automatically adjusts between settings to suit your environment.',
                'price' => 249.00,
                'image_url' => 'https://picsum.photos/seed/airpods-pro/800/600',
                'rating' => 4.8,
                'reviews_count' => 12456,
                'is_featured' => true,
            ],
            [
                'category' => 'audio',
                'name' => 'Bose QuietComfort 45',
                'slug' => 'bose-qc45',
                'description' => 'Renowned Bose noise cancellation in an ultra-comfortable, lightweight design. 24-hour battery and Aware Mode let you tune the world in or out on your terms.',
                'price' => 279.00,
                'image_url' => 'https://picsum.photos/seed/bose-qc45/800/600',
                'rating' => 4.7,
                'reviews_count' => 6234,
                'is_featured' => false,
            ],
            [
                'category' => 'audio',
                'name' => 'Sennheiser HD 660S2',
                'slug' => 'sennheiser-hd-660s2',
                'description' => 'Open-back audiophile headphones with transducers developed for the legendary HD 800 S. Low harmonic distortion and natural spatial sound for the discerning listener.',
                'price' => 499.00,
                'image_url' => 'https://picsum.photos/seed/sennheiser/800/600',
                'rating' => 4.8,
                'reviews_count' => 543,
                'is_featured' => false,
            ],

            // Gaming
            [
                'category' => 'gaming',
                'name' => 'PlayStation 5',
                'slug' => 'playstation-5',
                'description' => 'Experience lightning-fast loading, deep immersion with haptic feedback and adaptive triggers, and stunning 4K visuals — a true generational leap in gaming.',
                'price' => 499.00,
                'image_url' => 'https://picsum.photos/seed/ps5-console/800/600',
                'rating' => 4.9,
                'reviews_count' => 18203,
                'is_featured' => true,
            ],
            [
                'category' => 'gaming',
                'name' => 'Xbox Series X',
                'slug' => 'xbox-series-x',
                'description' => 'The fastest, most powerful Xbox ever. Play thousands of games across four generations, with Xbox Game Pass, 4K gaming, and up to 120FPS performance.',
                'price' => 499.00,
                'image_url' => 'https://picsum.photos/seed/xbox-series-x/800/600',
                'rating' => 4.8,
                'reviews_count' => 14502,
                'is_featured' => false,
            ],
            [
                'category' => 'gaming',
                'name' => 'Nintendo Switch OLED',
                'slug' => 'nintendo-switch-oled',
                'description' => 'Featuring a vibrant 7-inch OLED screen, enhanced audio, and 64GB storage. Play at home or on the go with a wide range of Nintendo-exclusive titles.',
                'price' => 349.00,
                'image_url' => 'https://picsum.photos/seed/nintendo-switch/800/600',
                'rating' => 4.8,
                'reviews_count' => 9871,
                'is_featured' => false,
            ],
            [
                'category' => 'gaming',
                'name' => 'Steam Deck OLED',
                'slug' => 'steam-deck-oled',
                'description' => 'Your entire Steam library in your hands. The new OLED model delivers a stunning HDR display, longer battery life, and faster Wi-Fi for portable PC gaming anywhere.',
                'price' => 549.00,
                'image_url' => 'https://picsum.photos/seed/steam-deck/800/600',
                'rating' => 4.7,
                'reviews_count' => 4312,
                'is_featured' => true,
            ],
            [
                'category' => 'gaming',
                'name' => 'Razer DeathAdder V3',
                'slug' => 'razer-deathadder-v3',
                'description' => 'Ultra-lightweight at 59g with Razer\'s Focus Pro 30K optical sensor, 90-hour battery life, and ergonomic design refined over 15 years of DeathAdder excellence.',
                'price' => 149.00,
                'image_url' => 'https://picsum.photos/seed/razer-mouse/800/600',
                'rating' => 4.6,
                'reviews_count' => 3201,
                'is_featured' => false,
            ],

            // Accessories
            [
                'category' => 'accessories',
                'name' => 'Apple Watch Series 9',
                'slug' => 'apple-watch-series-9',
                'description' => 'The most advanced Apple Watch yet. Carbon neutral, Double Tap gesture, brighter always-on display, and the new S9 chip for smarter Siri interactions on your wrist.',
                'price' => 399.00,
                'image_url' => 'https://picsum.photos/seed/apple-watch/800/600',
                'rating' => 4.8,
                'reviews_count' => 7634,
                'is_featured' => true,
            ],
            [
                'category' => 'accessories',
                'name' => 'Logitech MX Master 3S',
                'slug' => 'logitech-mx-master-3s',
                'description' => 'The master of mice. 8K DPI sensor, ultra-fast MagSpeed scroll wheel, and quiet clicks. Seamlessly control up to 3 computers with Easy-Switch and Flow.',
                'price' => 99.00,
                'image_url' => 'https://picsum.photos/seed/logitech-mx/800/600',
                'rating' => 4.9,
                'reviews_count' => 11203,
                'is_featured' => false,
            ],
            [
                'category' => 'accessories',
                'name' => 'Samsung T7 SSD 1TB',
                'slug' => 'samsung-t7-ssd',
                'description' => 'Blazing-fast 1,050MB/s read speeds in a slim, pocket-sized design. Password protection and AES 256-bit hardware encryption keep your data safe on the go.',
                'price' => 89.00,
                'image_url' => 'https://picsum.photos/seed/samsung-ssd/800/600',
                'rating' => 4.7,
                'reviews_count' => 5432,
                'is_featured' => false,
            ],
            [
                'category' => 'accessories',
                'name' => 'Anker 140W USB-C Charger',
                'slug' => 'anker-140w-charger',
                'description' => 'Charge a MacBook Pro, iPad, and iPhone simultaneously with one compact charger. GaN technology keeps it cool while delivering maximum power efficiency.',
                'price' => 49.00,
                'image_url' => 'https://picsum.photos/seed/anker-charger/800/600',
                'rating' => 4.6,
                'reviews_count' => 8901,
                'is_featured' => false,
            ],

            // Smart Home
            [
                'category' => 'smart-home',
                'name' => 'Apple HomePod mini',
                'slug' => 'apple-homepod-mini',
                'description' => 'Room-filling sound from a compact design. Intelligent assistant, smart home hub, and Intercom — powered by the Apple S5 chip and deeply integrated with Apple devices.',
                'price' => 99.00,
                'image_url' => 'https://picsum.photos/seed/homepod-mini/800/600',
                'rating' => 4.6,
                'reviews_count' => 4231,
                'is_featured' => false,
            ],
            [
                'category' => 'smart-home',
                'name' => 'Echo Show 10',
                'slug' => 'echo-show-10',
                'description' => 'A smart display with a 10.1-inch HD screen that automatically rotates to face you. Video calling, streaming, smart home control — all powered by Alexa.',
                'price' => 249.00,
                'image_url' => 'https://picsum.photos/seed/echo-show/800/600',
                'rating' => 4.5,
                'reviews_count' => 6712,
                'is_featured' => true,
            ],
            [
                'category' => 'smart-home',
                'name' => 'Philips Hue Starter Kit',
                'slug' => 'philips-hue-starter',
                'description' => 'Transform your home with 16 million colors and shades of white light. Includes 4 smart bulbs and a Hue Bridge — control with app, voice, or automations.',
                'price' => 199.00,
                'image_url' => 'https://picsum.photos/seed/philips-hue/800/600',
                'rating' => 4.7,
                'reviews_count' => 3456,
                'is_featured' => false,
            ],
            [
                'category' => 'smart-home',
                'name' => 'Google Nest Thermostat',
                'slug' => 'google-nest-thermostat',
                'description' => 'A sleek, energy-saving thermostat that learns your schedule and programs itself. Remote control via the Home app and integrates with most smart home systems.',
                'price' => 129.00,
                'image_url' => 'https://picsum.photos/seed/nest-thermostat/800/600',
                'rating' => 4.5,
                'reviews_count' => 5023,
                'is_featured' => false,
            ],
        ];

        $categories = Category::all()->keyBy('slug');

        foreach ($products as $data) {
            $categorySlug = $data['category'];
            unset($data['category']);

            $category = $categories->get($categorySlug);

            if ($category === null) {
                continue;
            }

            Product::create([
                ...$data,
                'category_id' => $category->id,
            ]);
        }
    }
}
