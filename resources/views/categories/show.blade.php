@extends('layouts.dashboard')

@section('title', 'Category Details')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="space-y-4">
            <div>
                <p class="text-sm text-gray-500">Nama</p>
                <p class="font-medium">{{ $category->name }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-medium">{{ $category->description }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Created At</p>
                <p class="font-medium">
                    {{ $category->created_at->format('d M Y H:i') }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Updated At</p>
                <p class="font-medium">
                    {{ $category->updated_at->format('d M Y H:i') }}
                </p>
            </div>
        </div>

        <div class="flex gap-2 justify-end">
            <a href="{{ route('categories.index') }}" class="bg-gray-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-700">Back to List</a>
        </div>
    </div>
@endsection
