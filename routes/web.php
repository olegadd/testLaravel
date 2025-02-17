<?php

use App\Http\Middleware\CheckSecretParam;
use Illuminate\Support\Facades\Route;

Route::prefix('blog')->group(function () {
    Route::get('/post/all', function () {
        return 'all';
    })->name('posts');
    Route::get('/post/{id}', function ($id) {
        return $id;
    });
});


Route::get('/admin', function () {
    return 'admin';
})->name('admin')->middleware('auth', 'admin');

Route::get('/secret-page', function () {
    return 'success!!!';
})->middleware(CheckSecretParam::class);

Route::get('/user/{id?}/', function ($id = 0) {
    return "User id: $id";
});
