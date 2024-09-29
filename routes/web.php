<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TipoProController;

// Elimina o comenta esta línea si no utilizas la ruta para users
// Route::resource('users', UserController::class);

// Asigna el controlador `TipoProController` a la ruta `tipopro`
Route::resource('tipopro', TipoProController::class);

Route::get('/', function () {
    return view('welcome');
});
