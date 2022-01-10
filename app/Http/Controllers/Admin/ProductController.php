<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }


    public function create()
    {
        return view('admin.product.create');
    }

    public function show(Product $product)
    {
        return view('admin.product.show');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit');
    }
}
