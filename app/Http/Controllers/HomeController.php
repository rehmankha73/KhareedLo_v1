<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::query()
            ->select('id','product_category_id' ,'name' ,'slug' ,'featured_image' , 'unit_price', 'description', 'created_at')
            ->with('product_category')
            ->take(10)
            ->get();

        return view('home', [
            'products' => $products
        ]);
    }
}
