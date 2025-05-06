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
Route::get('/products',[ProductController::class,'Product'])->name('get.product');
Route::post('/products', [ProductController::class, 'bulkAction'])->name('products.bulk-action');
Route::post('/products/update-dummy', [ProductController::class, 'updateProduct'])->name('products.updateProduct');

