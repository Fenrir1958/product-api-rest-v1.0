<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return $this->error('La contraseña es incorrecta', [], 401);
        }

        $user = Auth::user();
        $token =  $user->createToken('auth_token')->plainTextToken;

        return $this->success('Usuario autenticado con exito', ['user' => $user, 'token' => $token]);
    }
}
