<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:users,email',
            'password' => 'sometimes|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            //
            'name.sometimes' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un texto',
            'email.sometimes' => 'El email es requerido',
            'email.email' => 'El email no es válido',
            'email.unique' => 'El email ya está en uso',
            'password.min' => 'El password debe tener al menos 8 caracteres',

        ];
    }
}
