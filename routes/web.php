<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth');

Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('roles', \App\Http\Controllers\RoleController::class);
Route::resource('permissions', \App\Http\Controllers\PermissionController::class);

