<?php

namespace App\Http\Requests\Products;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|unique:products,name',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'categorie_id' => 'required|integer|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un texto',
            'description.string' => 'La descripción debe ser un texto',
            'quantity.required' => 'La cantidad es requerida',
            'quantity.integer' => 'La cantidad debe ser un número entero',
            'categorie_id.required' => 'La categoría es requerida',
            'categorie_id.integer' => 'La categoría debe ser un número entero',
            'categorie_id.exists' => 'La categoría no existe'
        ];
    }
}
