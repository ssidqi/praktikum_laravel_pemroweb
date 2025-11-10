<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\rules;

class AuthController extends Controller
{
    public function loginIndex(){
        return view('auth.login');
    }
    public function  registerIndex(){
        return view('auth.register');
    }
}
