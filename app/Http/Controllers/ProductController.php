<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function keyboards()
    {
        $keyboardCategory = Category::where('name', 'Keyboard')->first();
        $products = $keyboardCategory ? $keyboardCategory->products : collect();
        return view('product.keyboard.index', compact('products'));
    }

    public function laptops()
    {
        $laptopCategory = Category::where('name', 'Laptop')->first();
        $products = $laptopCategory ? $laptopCategory->products : collect();
        return view('product.laptop.index', compact('products'));
    }

    public function addToCart(Request $request, Product $product)
    {
        // This is a placeholder for cart logic.
        // In a real application, you would use a dedicated cart service or package.

        // Decrease stock
        if ($product->stock > 0) {
            $product->stock -= 1;
            $product->save();

            // Add to cart (simple session-based example)
            $cart = $request->session()->get('cart', []);
            $cart[$product->id] = ($cart[$product->id] ?? 0) + 1;
            $request->session()->put('cart', $cart);

            // Update total cart price (simple example)
            $totalPrice = $request->session()->get('total_cart_price', 0);
            $totalPrice += $product->price;
            $request->session()->put('total_cart_price', $totalPrice);

            return back()->with('success', $product->name . ' added to cart!');
        } else {
            return back()->with('error', $product->name . ' is out of stock.');
        }
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
}
