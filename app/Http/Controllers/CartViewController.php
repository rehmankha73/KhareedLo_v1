<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartViewController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('cart.cart');
    }
}
