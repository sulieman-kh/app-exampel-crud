<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    //function for register a new user
    public function register()
    {
        return view('auth.register');
    }
    //function for login user
    public function login()
    {
        return view('auth.login');
    }

}
