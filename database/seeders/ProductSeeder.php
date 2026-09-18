<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Aurora Desk Lamp',
                'description' => 'A minimalist dimmable desk lamp with a warm, flicker-free glow for late-night focus.',
                'price_in_cents' => 4999,
                'in_stock' => true,
            ],
            [
                'name' => 'Trail Daypack',
                'description' => 'A lightweight 22L daypack with a ventilated back panel and weather-resistant shell.',
                'price_in_cents' => 8900,
                'in_stock' => true,
            ],
            [
                'name' => 'Ceramic Pour-Over Set',
                'description' => 'A hand-finished ceramic dripper and server for a slow, even morning brew.',
                'price_in_cents' => 6500,
                'in_stock' => true,
            ],
            [
                'name' => 'Linen Throw Blanket',
                'description' => 'A breathable stonewashed linen throw that softens with every wash.',
                'price_in_cents' => 12000,
                'in_stock' => false,
            ],
            [
                'name' => 'Pocket Notebook Trio',
                'description' => 'Three lay-flat notebooks with dot-grid paper and a durable cloth cover.',
                'price_in_cents' => 2400,
                'in_stock' => true,
            ],
            [
                'name' => 'Oak Phone Stand',
                'description' => 'A solid oak stand machined to hold your phone at the perfect viewing angle.',
                'price_in_cents' => 3200,
                'in_stock' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
