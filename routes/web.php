<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LineItemController;

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


Route::controller(ProductController::class)->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/product/{id}','show')->name('show');
    });
});

Route::controller(LineItemController::class)->group(function(){
    Route::name('line_item.')->group(function(){
        Route::post('/line_item','create')->name('create');
        Route::post('/line_item/delete','delete')->name('delete');
    });
});

Route::controller(CartController::class)->group(function(){
    Route::name('cart.')->group(function(){
        Route::get('/cart','index')->name('index');
        Route::get('/cart/checkout','checkout')->name('checkout');
        Route::get('/cart/success','success')->name('success');
    });
});
