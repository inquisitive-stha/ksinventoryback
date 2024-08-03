<?php

namespace Modules\Category\Http\Requests\V1;

use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends BaseCategoryRequest
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
                Rule::unique('categories','title')->ignore($this->route('category')),
            ]
        ];
    }
}
