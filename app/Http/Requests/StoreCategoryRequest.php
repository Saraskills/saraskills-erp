<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'company_id' => 'required|exists:companies,id',

            'parent_id' => 'nullable|exists:categories,id',

            'name' => 'required|max:255',

            'code' => 'nullable|max:100',

            'description' => 'nullable',

            'status' => 'boolean'
        ];
    }
}