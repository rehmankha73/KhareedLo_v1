<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.products.product-show', ['products' => Product::query()->take(4)->get()]);
    }
}
