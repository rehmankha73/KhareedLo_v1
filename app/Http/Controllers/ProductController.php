<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function show(string $slug)
    {
        $product = Product::query()->where('slug', '=', $slug)->firstOrFail();
        return view('products.show', ['product' => $product]);
    }
}
