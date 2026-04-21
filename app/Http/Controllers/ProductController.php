<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->search);
        $products = Product::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'ilike', "%{$search}%")
                        ->orWhere('sku', 'ilike', "%{$search}%")
                        ->orWhereHas('category', function ($q2) use ($search) {
                            $q2->where('name', 'ilike', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->validated();
            $category = Category::findOrFail($data['category_id']);
            $prefix = strtoupper(substr($category->name, 0, 3));

            $lastProduct = Product::where('category_id', $category->id)
                ->where('sku', 'like', $prefix . '-%')
                ->lockForUpdate()
                ->orderBy('sku', 'desc')
                ->first();

            if (!$lastProduct) {
                $nextNumber = 1;
            } else {
                $lastNumber = (int) substr($lastProduct->sku, -4);
                $nextNumber = $lastNumber + 1;
            }

            $data['sku'] = $prefix . '-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

            Product::create($data);
        });

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validated();

        if (isset($data['category_id']) && $data['category_id'] != $product->category_id) {

            DB::transaction(function () use (&$data, $product) {
                $category = Category::findOrFail($data['category_id']);
                $prefix = strtoupper(substr($category->name, 0, 3));

                $lastProduct = Product::where('category_id', $category->id)
                    ->where('sku', 'like', $prefix . '-%')
                    ->lockForUpdate()
                    ->orderBy('sku', 'desc')
                    ->first();

                $nextNumber = $lastProduct
                    ? ((int) substr($lastProduct->sku, -4)) + 1
                    : 1;

                $data['sku'] = $prefix . '-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

                $product->update($data);
            });

        } else {
            $product->update($data);
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route('products.index');
    }
}
