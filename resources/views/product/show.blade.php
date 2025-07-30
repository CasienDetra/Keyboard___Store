<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        <div class="flex-shrink-0 mr-6">
                            <img src="{{ filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-96 h-96 object-cover rounded-lg">
                        </div>
                        <div class="p-10 mt-16">
                            <h3 class="text-2xl text-purple-700 font-bold mb-2">{{ $product->name }}</h3>
                            <p class="text-white mb-4">{{ $product->description }}</p>
                            <p class="text-xl font-semibold text-purple-700 mb-4">${{ number_format($product->price, 2) }}</p>
                            <p class="text-sm text-white mb-4">Stock: {{ $product->stock }}</p>
                            <div class="flex gap-4">
                            <form action="{{ route('cart.add', $product) }}" method="POST">
                                @csrf
                                <x-primary-button>Add to Cart</x-primary-button>
                            </form>
                            <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 text-sm">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
