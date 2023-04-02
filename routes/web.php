<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [LotController::class, 'index'])->name('lot.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

Route::get('/lotcreate', [LotController::class, 'create'])->name('lot.create');
Route::get('/categorycreate', [CategoryController::class, 'create'])->name('category.create');

Route::post('/lot/store', [LotController::class, 'store'])
    ->name('lot.store');
Route::post('/category/store', [CategoryController::class, 'store'])
    ->name('category.store');

Route::delete('/lot/{lot}', [LotController::class, 'destroy'])
    ->name('lot.destroy');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])
    ->name('category.destroy');

Route::get('/lot/edit/{lot}', [LotController::class, 'edit'])
    ->name('lot.edit');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])
    ->name('category.edit');


Route::put('/lot/{lot}', [LotController::class, 'update'])
    ->name('lot.update');
Route::put('/category/{category}', [CategoryController::class, 'update'])
    ->name('category.update');
