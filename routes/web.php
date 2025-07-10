<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/produits', [ProductController::class, 'index'])->name('produits.index');
    Route::get('/produits/create', [ProductController::class, 'create'])->name('produits.create');
    Route::post('/produits', [ProductController::class, 'store'])->name('produits.store');
    Route::get('/produits/{id}/edit', [ProductController::class, 'edit'])->name('produits.edit');
    Route::put('/produits/{id}', [ProductController::class, 'update'])->name('produits.update');
    Route::delete('/produits/{id}', [ProductController::class, 'destroy'])->name('produits.destroy');
});

require __DIR__.'/auth.php';
