<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{
    public $product;

    public function render()
    {
        $cart = \Cart::get($this->product->id);
        $this->product->in_cart = !empty($cart);

        $in_wishlist = auth()->user()->wishlist()->where('product_id', $this->product->id)->first();
        $this->product->in_wishlist = !empty($in_wishlist);

        return view('livewire.products.product-show', [
            'product' => $this->product,
            'products' => Product::query()->take(4)->get()
        ]);
    }

    public function addToCart(Product $product)
    {
        \Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->unit_price,
            'quantity' => 1,
            'attributes' => [
                'image_url' => $product->featured_image_url,
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
