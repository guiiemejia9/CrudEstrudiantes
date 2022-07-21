<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::prefix('category')->group(function () {
    Route::get('/agregar', [CategoryController::class, 'create'])->name('category-add');
    Route::get('/visualizar', [CategoryController::class, 'index'])->name('category-visualize');
    Route::post('/crear', [CategoryController::class, 'store'])->name('category-create');
    //Route::delete('/eliminar/{id}', [CuentaController::class, 'delete'])->name('cuenta-eliminar');
   // Route::get('/editar/{id}', [CuentaController::class, 'edit'])->name('cuenta-editar');
   // Route::PUT('/actualizar/{id}', [CuentaController::class, 'update'])->name('cuenta-actualizar');
});

Route::get('/', function () {
    return view('welcome');
});
