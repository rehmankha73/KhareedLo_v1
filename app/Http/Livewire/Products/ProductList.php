<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.products.product-list',[
            'products' => $this->getProducts(),
        ]);
    }

    public function getProducts() {
        return Product::query()->with(['product_category'])
            ->paginate(10);
    }
}
