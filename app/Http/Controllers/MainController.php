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
}
