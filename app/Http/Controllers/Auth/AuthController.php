<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('layout.auth.login');
    }

    public function showRegister(){
        return view('layout.auth.register');
    }
}
