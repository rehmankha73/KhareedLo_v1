<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use function view;

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
        $product->colors = $this->getAttributeInArray($product->colors);
        $product->sizes = $this->getAttributeInArray($product->sizes);
        $product->others = $this->getAttributeInArray($product->others);

        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    private function getAttributeInArray($attribute) {
        if(!empty($attribute)) {
            return explode(",", $attribute);
        }

        return [];

    }
}
