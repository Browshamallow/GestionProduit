<?php
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/produits/create', [ProductController::class, 'create']);
Route::post('/produits', [ProductController::class, 'store']);
Route::get('/produits/{id}/edit', [ProductController::class, 'edit']);
Route::put('/produits/{id}', [ProductController::class, 'update']);
Route::delete('/produits/{id}', [ProductController::class, 'destroy']);
