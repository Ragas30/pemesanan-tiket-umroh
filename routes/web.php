<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;

Route::get('/', [homeController::class, 'index'])->name('home');
