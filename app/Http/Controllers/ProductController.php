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
        return view('products', [
            'products' => Product::orderBy('name')->get(),
        ]);
    }
}
