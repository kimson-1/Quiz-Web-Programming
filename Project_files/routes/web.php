<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\WriterCreateController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PopularController;



Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/detail/{slug}', [DetailController::class, 'show'])->name('detail.show');
Route::get('/writer',[WriterController::class,'show'])->name('writer.show');
Route::get('/writer/{slug}',[WriterCreateController::class,'show'])->name('writer.name.show');
Route::get('/about',[AboutController::class,'show'])->name('about.show');
Route::get('/popular',[PopularController::class,'show'])->name('popular.show');