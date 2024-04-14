<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/{id}/editar', [ProductController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductController::class, 'update'])->name('productos.update');
Route::delete('/productos/{id}', [ProductController::class, 'destroy'])->name('productos.destroy');

