<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'unit' => 'required|string|max:100',
            'purchase_price' => 'required|integer|min:0',
            'selling_price' => 'required|integer|min:0|gte:purchase_price',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required',

            'category_id.required' => 'Category is required',
            'category_id.exists' => 'Selected category is invalid',

            'unit.required' => 'Unit is required',

            'purchase_price.required' => 'Purchase price is required',
            'purchase_price.integer' => 'Purchase price must be a number',
            'purchase_price.min' => 'Purchase price cannot be negative',

            'selling_price.required' => 'Selling price is required',
            'selling_price.integer' => 'Selling price must be a number',
            'selling_price.gte' => 'Selling price must be greater than or equal to purchase price',
        ];
    }
}
