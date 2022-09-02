<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('categories')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('clients')->group(function(){
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/show/{id}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/update/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/destroy/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});