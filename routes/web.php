<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/page', [PageController::class,'home']);
Route::get('/about', [PageController::class,'about']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/order', [PageController::class,'order']);