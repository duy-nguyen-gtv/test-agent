<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'price_in_cents', 'in_stock'])]
class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'price_in_cents' => 'integer',
            'in_stock' => 'boolean',
        ];
    }

    /**
     * Get the product's price in dollars.
     */
    protected function price(): Attribute
    {
        return Attribute::get(
            fn (mixed $value, array $attributes) => $attributes['price_in_cents'] / 100,
        );
    }
}
