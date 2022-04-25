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

    public function addToCart(Product $product) {

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

        session()->flash('message', 'Product has been added in cart!');
        return redirect()->route('products.show',['slug' => $product->slug]);

    }

    public function removeFromCart(Product $product)
    {
        \Cart::remove($product->id);

        session()->flash('message', 'Product has been removed from cart!');
        return redirect()->route('products.show',['slug' => $product->slug]);

    }

    public function addToWishList(Product $product) {

        $user = auth()->user();
        $user->wishlist()->create(['product_id' => $product->id]);

        session()->flash('message', 'Product has been added in Wish List!');
        return redirect()->route('products.show',['slug' => $product->slug]);

    }

    public function removeFromWishList(Product $product) {

        $user = auth()->user();
        $user->wishlist()->where('product_id' , $product->id)->first()->delete();

        session()->flash('message', 'Product has been removed from Wish List!');
        return redirect()->route('products.show',['slug' => $product->slug]);

    }
}
