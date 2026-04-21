@extends('layouts.dashboard')

@section('title', 'Product Details')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="space-y-4">
            <div>
                <p class="text-sm text-gray-500">SKU</p>
                <p class="font-medium">{{ $product->sku }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Product Name</p>
                <p class="font-medium">{{ $product->name }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Category</p>
                <p class="font-medium">{{ $product->category->name }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Unit</p>
                <p class="font-medium">{{ $product->unit }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Purchase Price</p>
                <p class="font-medium">{{ $product->purchase_price }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Selling Price</p>
                <p class="font-medium">{{ $product->selling_price }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Current Stock</p>
                <p class="font-medium">{{ $product->current_stock }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Created At</p>
                <p class="font-medium">
                    {{ $product->created_at->format('d M Y H:i') }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Updated At</p>
                <p class="font-medium">
                    {{ $product->updated_at->format('d M Y H:i') }}
                </p>
            </div>
        </div>

        <div class="flex gap-2 justify-end">
            <a href="{{ route('products.index') }}" class="bg-gray-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-700">Back to List</a>
        </div>
    </div>
@endsection
