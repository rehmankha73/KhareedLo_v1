<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function __invoke(Request $request)
    {
        DB::transaction(function () {
            $order = auth()->user()->orders()->create([
                'sub_total' => \Cart::getSubTotal(),
                'discount' => 0,
                'total' => \Cart::getTotal(),
            ]);

            $cart_items = \Cart::getContent();
            foreach($cart_items as $item) {
                $order->order_details()->create([
                    'product_id' => $item->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'sub_total' => $item->getPriceSum(),
                    'discount' => 0.0,
                ]);
            }
        });

        dd('Order Created');
    }
}
