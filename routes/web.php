<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});


Route::get('/products',[ProductController::class,'product'])->name('get.product');
//Route::post('/products', [ProductController::class, 'bulkAction'])->name('products.bulk-action');
//Route::get('/products',[ProductController::class,'getProduct'])->name('add.product');
Route::get('/addProduct', [ProductController::class, 'getProduct'])->name('products.addProduct');

Route::post('/addProduct', [ProductController::class, 'store'])->name('products.updateProduct');

