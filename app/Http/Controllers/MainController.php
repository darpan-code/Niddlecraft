<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Home Page
    function index(){
        return view('home');
    }

    // User Login Page
    function userLogin(){
        return view('authentication.userAuth.login');
    }

    // User Forgot Password page
    function forgotPassword(){
        return view('authentication.userAuth.forgot-password');
    }
}
