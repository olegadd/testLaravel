<?php

use App\Http\Controllers\DarkThemeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/user', [UserController::class, 'show']);

Route::post('/dark', [DarkThemeController::class, 'show']);
