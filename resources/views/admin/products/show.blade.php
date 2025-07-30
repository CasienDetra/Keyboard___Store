<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <strong>Name:</strong> {{ $product->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Description:</strong> {{ $product->description }}
                    </div>
                    <div class="mb-4">
                        <strong>Price:</strong> ${{ number_format($product->price, 2) }}
                    </div>
                    <div class="mb-4">
                        <strong>Stock:</strong> {{ $product->stock }}
                    </div>
                    <div class="mb-4">
                        <strong>Image:</strong>
                        @if ($product->image)
                            <img src="{{ filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mt-2" style="max-width: 400px; max-height: 400px;">
                        @else
                            <p>No image available.</p>
                        @endif
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
