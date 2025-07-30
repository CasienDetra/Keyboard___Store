<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::all();
    return view('admin.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();
    return view('admin.products.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'nullable|string',
      'price' => 'required|numeric|min:0',
      'stock' => 'required|integer|min:0',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'image_url' => 'nullable|url',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
      $path = $request->file('image')->store('products', 'public');
      $data['image'] = $path;
    } elseif ($request->filled('image_url')) {
      $data['image'] = $request->image_url;
    }

    Product::create($data);

    return redirect()->route('admin.products.index')
      ->with('success', 'Product created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    return view('admin.products.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    $categories = Category::all();
    return view('admin.products.edit', compact('product', 'categories'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Product $product)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'nullable|string',
      'price' => 'required|numeric|min:0',
      'stock' => 'required|integer|min:0',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'image_url' => 'nullable|url',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
      if ($product->image && !filter_var($product->image, FILTER_VALIDATE_URL)) {
        Storage::disk('public')->delete($product->image);
      }
      $path = $request->file('image')->store('products', 'public');
      $data['image'] = $path;
    } elseif ($request->filled('image_url')) {
      if ($product->image && !filter_var($product->image, FILTER_VALIDATE_URL)) {
        Storage::disk('public')->delete($product->image);
      }
      $data['image'] = $request->image_url;
    }

    $product->update($data);

    return redirect()->route('admin.products.index')
      ->with('success', 'Product updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    if ($product->image && !filter_var($product->image, FILTER_VALIDATE_URL)) {
      Storage::disk('public')->delete($product->image);
    }
    $product->delete();

    return redirect()->route('admin.products.index')
      ->with('success', 'Product deleted successfully.');
  }
}
