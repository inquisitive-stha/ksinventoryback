<?php

namespace Modules\Product\Http\Requests\V1;

use Illuminate\Validation\Rule;

class ProductUpdateRequest extends BaseProductRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data.attributes.title' => [
                'sometimes',
                'string',
                Rule::unique('products','title')->ignore($this->route('product')),
            ],
            'data.attributes.description' => ['sometimes','string'],
            'data.attributes.sku' => ['sometimes','string'],
            'data.attributes.email' => ['sometimes','email'],
            'data.relationships.brand.data.id' => ['sometimes','integer','exists:brands,id'],
            'data.relationships.category.data.id' => ['sometimes','integer','exists:categories,id'],
        ];
    }
}
