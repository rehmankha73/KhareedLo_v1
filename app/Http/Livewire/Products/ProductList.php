<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $search;
    public $selected_categories = [];

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.products.product-list',[
            'products' => $this->getProducts(),
            'categories' => $this->getCategories(),
        ]);
    }

    private function getProducts() {
        if(!$this->selected_categories){
            $products =  Product::query()
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->with(['product_category'])
                ->get();
        } else {
//            $cat = ProductCategory::query()->
        }


        $products->each(function ($product){
            $in_cart = \Cart::get($product->id);
            $product->in_cart = !empty($in_cart);
        });

        return $products;
    }

    private function getCategories() {
        return ProductCategory::query()->get()->pluck('name','id');
    }

    public function addToCart(Product $product)
    {
        \Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->unit_price,
            'quantity' => 1,
            'attributes' => [
                'brand' => $product->brand,
                'colors' => $product->colors,
                'sizes' => $product->colors,
                'others' => $product->others,
            ],
        ]);

        $this->emit('refreshCart');
        session()->flash('message', 'Product has been added in cart!');
        return $this->render();
    }

    public function removeFromCart(Product $product)
    {
        \Cart::remove($product->id);

        $this->emit('refreshCart');
        session()->flash('message', 'Product has been removed from cart!');
        return $this->render();
    }
}
