<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class Controller
{
    //
    public static function success(string $message, array $data = [], int $status = 200): JsonResponse
    {
        return response()->json(
            [
                'status' => true,
                'message' => $message,
                'data' => $data
            ],
            $status
        );
    }

    public static function error(string $message, array $data = [], int $status = 400): JsonResponse
    {
        return response()->json(
            [
                'status' => false,
                'message' => $message,
                'error' => $data
            ],
            $status
        );
    }
}
