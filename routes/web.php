<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BuscadorController;

// Ruta principal de la aplicación
Route::get('/', function () {
    return view('welcome');
});

// Rutas para Préstamos
Route::resource('prestamos', PrestamoController::class);

// Rutas para Libros
Route::resource('libros', LibroController::class);

// Rutas para Usuarios
Route::resource('usuarios', UsuarioController::class);

// Ruta para el Buscador de Libros
Route::get('buscador', [BuscadorController::class, 'index'])->name('buscador.index');
Route::get('buscador/libros', [BuscadorController::class, 'buscar'])->name('buscador.libros');
