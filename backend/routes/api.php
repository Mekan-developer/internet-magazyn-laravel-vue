<?php

use App\Http\Controllers\Api\FilterController;
use App\Http\Controllers\Api\FilterListController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/products/filters',[FilterController::class,'index']);
Route::post('/cart-products',[OrderController::class,'cartProducts']);

Route::resource('/products',ProductController::class)->except(['index']);
Route::post('/products',[ProductController::class,'index']);
Route::resource('/orders',OrderController::class);