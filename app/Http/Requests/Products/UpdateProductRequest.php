<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
                Rule::unique('products', 'name')->ignore($this->route('id')),
            ],
            'description' => 'sometimes|nullable|string',
            'quantity' => 'sometimes|required|integer',
            'categorie_id' => 'sometimes|required|integer|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un texto',
            'name.unique' => 'El nombre ya existe',
            'description.string' => 'La descripción debe ser un texto',
            'quantity.required' => 'La cantidad es requerida',
            'quantity.integer' => 'La cantidad debe ser un número entero',
            'categorie_id.required' => 'La categoría es requerida',
            'categorie_id.integer' => 'La categoría debe ser un número entero',
            'categorie_id.exists' => 'La categoría no existe'
        ];
    }
}
