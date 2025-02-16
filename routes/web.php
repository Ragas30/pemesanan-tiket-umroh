<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\Produk\ProdukController;
use App\Http\Controllers\About\AboutController;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('about', [AboutController::class, 'index'])->name('about');;

//Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('loginPage');
Route::get('/register', [AuthController::class, 'showRegister'])->name('registerPage');


//admin


//user