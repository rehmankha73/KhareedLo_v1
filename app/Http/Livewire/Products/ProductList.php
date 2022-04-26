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
    public $price_range = 0;
    public $sortBy;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.products.product-list', [
            'products' => $this->getProducts(),
            'categories' => $this->getCategories(),
        ]);
    }

    private function getProducts()
    {
        $products = Product::query()
            ->when($this->selected_categories, function ($q) {
                $q->whereIn('product_category_id', $this->selected_categories);
            })
            ->whereBetween('unit_price', [$this->price_range, $this->price_range + 500])
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->when($this->sortBy, function ($q){
                $q->orderBy('name', $this->sortBy);
            })
            ->with(['product_category'])
            ->get();


        $products->each(function ($product) {
            $in_wishlist = auth()->user()->wishlist()->where('product_id', $product->id)->first();
            $product->in_wishlist = !empty((boolean)$in_wishlist);
            $in_cart = \Cart::get($product->id);
            $product->in_cart = !empty($in_cart);
        });

        return $products;
    }

    private function getCategories()
    {
        return ProductCategory::query()->get()->pluck('name', 'id');
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

    public function clearAll()
    {
        $this->search = '';
        $this->selected_categories = [];
    }

    public function removeFromCart(Product $product)
    {
        \Cart::remove($product->id);

        $this->emit('refreshCart');
        session()->flash('message', 'Product has been removed from cart!');
        return $this->render();
    }

    public function addToWishList(Product $product)
    {
        auth()->user()->wishlist()->create(['product_id' => (int)$product->id]);

        session()->flash('message', 'Product has been added in Wish List!');
        return $this->render();
    }

    public function removeFromWishList(Product $product)
    {
        auth()->user()->wishlist()->where('product_id', $product->id)->first()->delete();

        session()->flash('message', 'Product has been removed from Wish List!');
        return $this->render();
    }
}
