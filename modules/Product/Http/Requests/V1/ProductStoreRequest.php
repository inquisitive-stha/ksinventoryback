<?php

namespace Modules\Product\Http\Requests\V1;

use Illuminate\Validation\Rule;

class ProductStoreRequest extends BaseProductRequest
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
            'data' => ['required','array'],
            'data.attributes' => ['required','array'],
            'data.attributes.title' => [
                'required',
                'string',
                Rule::unique('products','title')->ignore($this->route('product')),
            ],
            'data.attributes.description' => ['nullable','string'],
            'data.attributes.sku' => ['required','string'],
            'data.relationships.brand.data.id' => ['required','integer','exists:brands,id'],
            'data.relationships.category.data.id' => ['required','integer','exists:categories,id'],
        ];
    }
}
