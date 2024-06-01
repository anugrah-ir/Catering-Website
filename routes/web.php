<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/page', [PageController::class,'home']);
Route::get('/about', [PageController::class,'about']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/order', [PageController::class,'order']);

Route::get('/keranjang', [ShoppingCartController::class, 'index'])->name('shopping.cart');
Route::post('/add-to-cart', [ShoppingCartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/remove-from-cart/{id}', [ShoppingCartController::class, 'removeFromCart'])->name('remove.from.cart');


Route::get('/invoice/pdf', [InvoiceController::class, 'generatePDF'])->name('invoice.pdf');

Route::get('/order', [MenuItemController::class, 'index'])->name('order');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';