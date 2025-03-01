<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            //
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'password.required' => 'El password es requerido',
            'email.email' => 'El email no es válido',
            'email.unique' => 'El email ya está en uso',
            'password.min' => 'El password debe tener al menos 8 caracteres',

        ];
    }
}
