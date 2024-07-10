<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/usuario', [UserController::class, 'index'])->name('users.index');
Route::get('/usuario/ingresar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuario', [UserController::class, 'store'])->name('users.store');
