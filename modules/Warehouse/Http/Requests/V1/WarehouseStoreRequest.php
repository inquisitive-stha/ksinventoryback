<?php

namespace Modules\Warehouse\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WarehouseStoreRequest extends BaseWarehouseRequest
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
                Rule::unique('warehouses','name')->ignore($this->route('warehouse')),
            ],
            'data.attributes.address' => ['required','string'],
            'data.attributes.phone' => ['required','string'],
            'data.attributes.email' => ['required','email'],
        ];
    }
}
