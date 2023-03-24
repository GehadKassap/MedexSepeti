<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingController;

Route::middleware(['isAdmin'])->prefix("dashboard")->group(function(){

  Route::get('/', [HomeController::class ,'index'])->name('home');
  Route::resource('categories', CategoryController::class);
  Route::resource('products', ProductController::class);
  Route::resource('settings', SettingController::class);

});
