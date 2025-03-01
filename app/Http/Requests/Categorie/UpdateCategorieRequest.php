<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategorieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => [
                'sometimes',
                'required',
                'string',
                Rule::unique('categories', 'name')->ignore($this->route('id')),
            ],
            'description' => 'sometimes|nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un texto',
            'name.unique' => 'El nombre ya existe',
            'description.string' => 'La descripción debe ser un texto'
        ];
    }
}
