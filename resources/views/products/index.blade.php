@extends('layouts.dashboard')

@section('title', 'Products')

@section('content')
    <div class="bg-white rounded-lg shadow-sm">
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center gap-2 w-full max-w-2xl">
                <span class="border border-gray-200 rounded-lg p-2.5 text-sm font-medium hover:bg-gray-100 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-funnel-icon lucide-funnel w-4 h-4"><path d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z"/></svg>
                </span>

                <form method="GET" action="{{ route('products.index') }}" class="relative w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
                    <input
                        type="text" name="search"
                        value="{{ request('search') }}"
                        placeholder="Search products..."
                        class="w-full border border-gray-200 text-sm rounded-lg pl-9 pr-4 py-2 focus:outline-none focus:border-emerald-600"
                    >
                </form>

                <span class="flex items-center gap-2 border border-gray-200 rounded-lg p-2.5 text-sm font-medium hover:bg-gray-100 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-up-icon lucide-file-up w-4 h-4"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M12 12v6"/><path d="m15 15-3-3-3 3"/></svg>
                </span>
            </div>

            <div>
                <a href="{{ route('products.create') }}" class="bg-emerald-600 text-white rounded-lg px-4 py-2.5 text-sm font-medium hover:bg-emerald-700 transition-colors duration-200">Add New Product</a>
            </div>
        </div>

        @if ($products->isEmpty())
            <div class="px-4 pb-4">
                <div class="p-4 flex items-center gap-2 bg-amber-50 border border-amber-200 rounded-lg text-amber-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-4 h-4"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                    <span class="text-sm">
                        No products available. Start by adding your first product.
                    </span>
                </div>
            </div>
        @else
            <x-table :headers="['SKU', 'Name', 'Category', 'Purchase Price', 'Selling Price', 'Current Stock', 'Unit']" :data="$products">
                @foreach ($products as $product)
                    <tr class="cursor-pointer even:bg-gray-100 hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-4 py-2.5">{{ $product->sku }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $product->name }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $product->category->name }}</td>
                        <td class="px-4 py-2.5 text-gray-500">
                            Rp{{ number_format($product->purchase_price, 0, ',', '.') }}
                        </td>
                        <td class="px-4 py-2.5 text-gray-500">
                            Rp{{ number_format($product->selling_price, 0, ',', '.') }}
                        </td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $product->current_stock }}</td>
                        <td class="px-4 py-2.5 text-gray-500 capitalize">{{ $product->unit }}</td>
                        <td class="flex items-center gap-4 px-4 py-2.5 text-gray-600">
                            <a href="{{ route('products.show', $product->id) }}" class="flex items-center gap-1 text-sm font-medium hover:text-emerald-600 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye w-3 h-3"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                                <span>
                                    Show
                                </span>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="flex items-center gap-1 text-sm font-medium hover:text-yellow-500 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen w-3 h-3"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/></svg>
                                <span>
                                    Edit
                                </span>
                            </a>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure you want to delete {{ addslashes($product->name) }}?')" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center gap-1 text-sm font-medium hover:text-red-600 transition-colors duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2 w-3 h-3"><path d="M10 11v6"/><path d="M14 11v6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                    <span>
                                    Delete
                                </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-table>
        @endif

        @if ($products->hasPages())
            <div class="p-4">
                {{ $products->links() }}
            </div>
        @endif
    </div>
@endsection
