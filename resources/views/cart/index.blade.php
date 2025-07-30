<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shopping Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    @if (session('cart') && count(session('cart')) > 0)
                        <h3 class="text-xl font-semibold mb-4">Your Items</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                            @php $total = 0; @endphp
                            @foreach (session('cart') as $productId => $quantity)
                                @php
                                    $product = App\Models\Product::find($productId);
                                    if ($product) {
                                        $itemTotal = $product->price * $quantity;
                                        $total += $itemTotal;
                                    }
                                @endphp
                                @if ($product)
                                    <div class="bg-black border border-white rounded-xl shadow-md overflow-hidden">
                                        <img src="{{ filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                                        <div class="p-4">
                                            <h4 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h4>
                                            <p class="text-gray-600 mt-1">${{ number_format($product->price, 2) }} x {{ $quantity }}</p>
                                            <p class="text-sm text-gray-500">Subtotal: ${{ number_format($itemTotal, 2) }}</p>
                                            <div class="mt-4">
                                                <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-danger-button class="w-[35%]">Remove</x-danger-button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="mt-6 text-right">
                            <h3 class="text-2xl font-bold text-white">Total: ${{ number_format($total, 2) }}</h3>
                            <div class="mt-4 flex justify-end gap-4">
                                <x-primary-button>Proceed to Checkout</x-primary-button>
                                <x-secondary-button>Review Order</x-secondary-button>
                            </div>
                        </div>
                    @else
                        <p class="text-center text-gray-600">Your cart is empty.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
