<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartInNav extends Component
{
    protected $listeners = ['refreshCart' => '$refresh'];

    public function render()
    {
        return view('livewire.cart-in-nav', [
            'items' => \Cart::getContent()
        ]);
    }
}
