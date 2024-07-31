<?php

namespace Modules\Brand\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandV1Request extends FormRequest
{
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
        $id = $this->route('brand') ? $this->route('brand') : null;
        return [
            'name' => [
                'required', 
                'string',
                Rule::unique('brands', 'name')->ignore($id),
            ],
        ];
    }
}
