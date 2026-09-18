<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(): View
    {
        $products = Product::query()
            ->orderBy('name')
            ->orderBy('id')
            ->get();

        return view('products.index', ['products' => $products]);
    }
}
