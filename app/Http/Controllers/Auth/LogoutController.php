<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // logout
    function logout(Request $request){
        $request->session()->regenerate();
        $request->session()->invalidate();

        return redirect()->route('home');
    }
}
