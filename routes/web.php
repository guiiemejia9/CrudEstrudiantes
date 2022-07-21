<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::prefix('category')->group(function () {
    Route::get('/agregar', [CategoryController::class, 'create'])->name('category-add');
    Route::get('/visualizar', [CategoryController::class, 'index'])->name('category-visualize');
    Route::post('/crear', [CategoryController::class, 'store'])->name('category-create');
    Route::delete('/eliminar/{id}', [CategoryController::class, 'delete'])->name('category-delete');
    Route::get('/editar/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::PUT('/actualizar/{id}', [CategoryController::class, 'update'])->name('category-update');
});

Route::get('/', function () {
    return view('welcome');
});
