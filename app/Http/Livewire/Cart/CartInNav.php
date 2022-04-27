<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartInNav extends Component
{
    protected $listeners = ['refreshCart' => '$refresh'];

    public function render()
    {
        return view('livewire.cart.cart-in-nav', [
            'items' => \Cart::getContent()
        ]);
    }
}
