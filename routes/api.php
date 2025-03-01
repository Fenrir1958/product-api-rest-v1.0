<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthenticationController::class, 'login']);

Route::controller(UserController::class)->group(function () {
    Route::post('/createUser', 'store');
    Route::put('/updateUser/{id}', 'update')->middleware('auth:sanctum');
});
