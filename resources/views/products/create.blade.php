@extends('layouts.dashboard')

@section('title', 'Create New Product')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <form method="POST" action="{{ route('products.store') }}" class="grid grid-cols-2 gap-4">
            @csrf
            <div class="col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Enter product name"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >
                @error('name')
                    <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category_id" id="category_id" class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
                @error('category_id')
                    <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="unit" class="block text-sm font-medium text-gray-700 mb-1">Unit</label>
                <input
                    type="text"
                    name="unit"
                    id="unit"
                    value="{{ old('unit') }}"
                    placeholder="e.g. pcs, box, liter"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >
                @error('unit')
                    <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="purchase_price" class="block text-sm font-medium text-gray-700 mb-1">Purchase Price</label>
                <input
                    type="number"
                    name="purchase_price"
                    id="purchase_price"
                    value="{{ old('purchase_price') }}"
                    placeholder="Enter purchase price"
                    min="0"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >
                @error('purchase_price')
                    <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="selling_price" class="block text-sm font-medium text-gray-700 mb-1">Selling Price</label>
                <input
                    type="number"
                    name="selling_price"
                    id="selling_price"
                    value="{{ old('selling_price') }}"
                    placeholder="Enter selling price"
                    min="0"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >
                @error('selling_price')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-span-2 flex gap-2 justify-end">
                <a href="{{ route('products.index') }}" class="bg-gray-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-700">Back to List</a>
                <button type="submit" class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700">Save</button>
            </div>
        </form>
    </div>
@endsection
