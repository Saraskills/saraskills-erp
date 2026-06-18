<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'company_id' => 'required|exists:companies,id',

            'category_id' => 'nullable|exists:categories,id',

            'brand_id' => 'nullable|exists:brands,id',

            'unit_id' => 'nullable|exists:units,id',

            'tax_rate_id' => 'nullable|exists:tax_rates,id',

            'sku' => 'required|max:100|unique:products,sku',

            'name' => 'required|max:255',

            'item_type' => 'required',

            'cost_price' => 'nullable|numeric',

            'selling_price' => 'nullable|numeric',

            'track_stock' => 'boolean',

            'has_variant' => 'boolean',

            'has_expiry' => 'boolean',

            'allow_decimal_qty' => 'boolean'
        ];
    }
}
