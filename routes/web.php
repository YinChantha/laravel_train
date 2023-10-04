<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/product', [ProductsController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductsController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductsController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductsController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductsController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductsController::class, 'destroy'])->name('product.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
