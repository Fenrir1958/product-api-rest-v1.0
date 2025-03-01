<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(StoreUserRequest $request): JsonResponse
    {
        $user = User::create($request->all());

        if (!$user) {
            return $this->error('No se pudo crear el usuario', [], 500);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->success('Usuario creado con exito', ['user' => $user, 'token' => $token]);
    }

    public function update(UpdateUserRequest $request, string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $user = User::find($id);

        if (!$user) {
            return $this->error('Usuario no encontrado', [], 404);
        }

        $user->update($request->all());

        return $this->success('Usuario actualizado con exito', ['user' => $user]);
    }
}
