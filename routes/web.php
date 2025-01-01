<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;

route::get('/',[homeController::class ,"index"])->name('home');