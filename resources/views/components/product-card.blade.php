<div class="bg-zinc-900 rounded-xl border border-white shadow-md overflow-hidden">
<a href="{{ route('products.show', $product->id) }}">
    <img src="{{ filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
</a>
    <div class="p-4 shadow-xl" style="box-shadow: 0 0 15px 5px rgba(128, 0, 128, 0.7);">
        <h3 class="text-xl font-semibold text-white">{{ $product->name }}</h3>
        <p class="text-white mt-1">${{ number_format($product->price, 2) }}</p>
        <p class="text-sm text-white">Stock: {{ $product->stock }}</p>
        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('products.show', $product->id) }}" class="bg-gray-500 border border-white text-white px-4 py-2 rounded-xl hover:bg-gray-600 text-sm">View Details</a>
            @if ($product->stock > 0)
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-purple-700 text-white px-4 py-2 border border-white rounded-xl hover:bg-purple-900 text-sm">Add to Cart</button>
                </form>
            @else
                <span class="text-red-500 font-semibold text-sm">Out of Stock</span>
                <button class="bg-gray-300 border border-white text-white px-4 py-2 rounded-xl cursor-not-allowed text-sm" disabled>Add to Cart</button>
            @endif
        </div>
    </div>
</div>
