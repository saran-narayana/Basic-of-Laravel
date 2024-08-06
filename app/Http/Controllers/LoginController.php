<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form(){
        return '<h1>This is Login Form Page</h1>';
    }

    public function login_process(){
        return '<h1>Your Login has been processed</h1>';
    }

    public function forget_password(){
        return '<h1>This is Forget Password form Page</h1>';
    }
}
