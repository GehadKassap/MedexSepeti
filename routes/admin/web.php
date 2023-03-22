<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::middleware(['isAdmin'])->prefix("dashboard")->group(function(){

  Route::resource('categories', CategoryController::class);
  Route::resource('products', ProductController::class);

});
