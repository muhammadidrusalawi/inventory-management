@extends('layouts.dashboard')

@section('title', 'Edit Category')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <form method="POST" action="{{ route('categories.update', $category->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $category->name) }}"
                    placeholder="Enter category name"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >
                @error('name')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    name="description"
                    id="description"
                    placeholder="Enter description"
                    rows="5"
                    class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                >{{ old('description', $category->description) }}</textarea>
                @error('description')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-span-2 flex gap-2 justify-end">
                <a href="{{ route('categories.index') }}" class="bg-gray-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-700">Back to List</a>
                <button type="submit" class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700">Update</button>
            </div>
        </form>
    </div>
@endsection
