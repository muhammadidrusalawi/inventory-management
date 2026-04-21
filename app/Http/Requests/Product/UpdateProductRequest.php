<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255',
            'category_id' => 'sometimes|exists:categories,id',
            'unit' => 'sometimes|string|max:100',
            'purchase_price' => 'sometimes|integer|min:0',
            'selling_price' => 'sometimes|integer|min:0|gte:purchase_price|required_with:purchase_price',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Product name must be a string',
            'name.max' => 'Product name may not be greater than 255 characters',

            'category_id.exists' => 'Selected category is invalid',

            'unit.string' => 'Unit must be a string',
            'unit.max' => 'Unit may not be greater than 100 characters',

            'purchase_price.integer' => 'Purchase price must be a number',
            'purchase_price.min' => 'Purchase price cannot be negative',

            'selling_price.integer' => 'Selling price must be a number',
            'selling_price.min' => 'Selling price cannot be negative',
            'selling_price.gte' => 'Selling price must be greater than or equal to purchase price',
            'selling_price.required_with' => 'Selling price is required when purchase price is provided',
        ];
    }
}
