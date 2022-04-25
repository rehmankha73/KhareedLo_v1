<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartViewController extends Controller
{
    public function __invoke(Request $request)
    {
        dd(\Cart::getContent());
        return view('cart.cart');
    }
}
