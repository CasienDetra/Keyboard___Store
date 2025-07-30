<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function remove(Request $request, Product $product)
    {
        $cart = $request->session()->get('cart', []);
        $totalPrice = $request->session()->get('total_cart_price', 0);

        if (isset($cart[$product->id])) {
            $quantityToRemove = $cart[$product->id];
            $totalPrice -= ($product->price * $quantityToRemove);
            unset($cart[$product->id]);

            // Restore stock
            $product->stock += $quantityToRemove;
            $product->save();
        }

        $request->session()->put('cart', $cart);
        $request->session()->put('total_cart_price', $totalPrice);

        return back()->with('success', $product->name . ' removed from cart.');
    }
}
