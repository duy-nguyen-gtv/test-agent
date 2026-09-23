<?php

use App\Models\Product;

describe('index', function () {
    it('renders the products page listing each product', function () {
        $products = Product::factory()->count(3)->create();

        $response = $this->get(route('products'));

        $response->assertOk();
        $response->assertSee('Our products');

        foreach ($products as $product) {
            $response->assertSee($product->name);
            $response->assertSee($product->description);
        }
    });

    it('shows an empty state when there are no products', function () {
        $response = $this->get(route('products'));

        $response->assertOk();
        $response->assertSee('No products available yet.');
    });
});
