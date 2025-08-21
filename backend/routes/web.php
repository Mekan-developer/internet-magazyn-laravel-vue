<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('main.index');


Route::resource('/categories', CategoryController::class);
Route::resource('/groups', GroupController::class);
Route::resource('/tags', TagController::class);
Route::resource('/colors', ColorController::class);
Route::resource('/users', UserController::class);
Route::resource('/products', ProductController::class);
