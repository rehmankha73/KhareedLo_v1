<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Cart extends Component
{
    public $quantities = [];

    public function mount()
    {
        \Cart::getContent()->each(function ($item, $key) {
            return $this->quantities[$key] = $item->quantity;
        });
    }

    public function increaseQuantity($key, $id){
        if (isset($this->quantities[$key])) {
            $this->quantities[$key]++;

            \Cart::update($id, [
                'quantity' => 1
            ]);

        }
    }

    public function removeItem($item_id)
    {
        \Cart::remove($item_id);
        $this->emit('refreshCart');
    }

    public function decreaseQuantity($key){
        if (isset($this->quantities[$key]) && $this->quantities[$key] > 1) {
            $this->quantities[$key]--;

            \Cart::update($key, [
                'quantity' => -1
            ]);
        }
    }

    public function clearCart()
    {
        \Cart::clear();
        $this->emit('refreshCart');
    }

    public function render()
    {
        return view('livewire.cart.cart', [
            'items' => \Cart::getContent()->sortBy('id'),
        ]);
    }
}
