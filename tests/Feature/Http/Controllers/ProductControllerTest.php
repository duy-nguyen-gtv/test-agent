<?php

use App\Models\Product;

it('renders the products page listing each product with its formatted price and stock status', function () {
    Product::factory()->create([
        'name' => 'Wireless Headphones',
        'price_in_cents' => 8999,
        'in_stock' => true,
    ]);

    $response = $this->get(route('products.index'));

    $response->assertOk();
    $response->assertSee('Wireless Headphones');
    $response->assertSee('$89.99');
    $response->assertSee('In stock');
});

it('marks an unavailable product as out of stock', function () {
    Product::factory()->outOfStock()->create(['name' => 'Discontinued Gadget']);

    $response = $this->get(route('products.index'));

    $response->assertOk();
    $response->assertSee('Discontinued Gadget');
    $response->assertSee('Out of stock');
});

it('renders an empty state when no products exist', function () {
    $response = $this->get(route('products.index'));

    $response->assertOk();
    $response->assertSee('No products available yet.');
});
