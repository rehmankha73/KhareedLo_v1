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
        $product = Product::query()
            ->where('slug', '=', $slug)
            ->firstOrFail();

        $in_wishlist = auth()->user()->wishlist()->where('product_id', $product->id)->first();
        $product->in_wishlist = (boolean)$in_wishlist;


        $in_cart = \Cart::get($product->id);
        $product->in_cart = (boolean)$in_cart;

        return view('products.show', ['product' => $product]);
    }
}
