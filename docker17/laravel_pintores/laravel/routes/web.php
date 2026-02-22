<?php

use App\Http\Controllers\CuadrosController;
use App\Http\Controllers\PintoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PintoresController::class, 'index'])->name('inicio');

Route::get('pintores', [PintoresController::class, 'index'])->name('pintores.index');

Route::get('pintores/{slug}', [PintoresController::class, 'show'])->name('pintores.mostrar');

Route::patch('cuadros/cambiarEstado/{cuadro}', [CuadrosController::class, 'cambiarEstado'])->name('cuadros.cambiarEstado');

Route::get('cuadros/crear', [CuadrosController::class, 'crear'])->name('cuadros.crear');

Route::post('cuadros', [CuadrosController::class, 'store'])->name('cuadros.store');
// <a href="{{route('disfraces.create')}}" class="nav-link">Nuevo Disfraz</a>
