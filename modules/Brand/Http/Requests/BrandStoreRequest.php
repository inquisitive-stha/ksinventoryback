<?php

namespace Modules\Brand\Http\Requests;

use Illuminate\Validation\Rule;

class BrandStoreRequest extends BaseBrandRequest
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
            'data.attributes.name' => [
                'required',
                'string',
                Rule::unique('brands','name')->ignore($this->route('brand')),
            ],
        ];
    }
}
