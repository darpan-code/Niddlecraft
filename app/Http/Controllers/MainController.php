<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Home Page
    function index(){
        return view('home');
    }

    // User Registration Page
    function userRegistration(){
        return view('authentication.userAuth.registration');
    }

    // User Login Page
    function userLogin(){
        return view('authentication.userAuth.login');
    }

    // User Forgot Password page
    function forgotPassword(){
        return view('authentication.userAuth.forgot-password');
    }

    // User OTP Verification page
    function otpVerification(){
        return view('authentication.userAuth.otp-verification');
    }

    // Admin Login page
    function adminLogin(){
        return view('authentication.adminAuth.admin-login');
    }

    // Admin Forgot Password page
    function adminForgotPassword(){
        return view('authentication.adminAuth.admin-forgot-password');
    }

    // Admin OTP to Change Password page
    function adminOtpVerify(){
        return view('authentication.adminAuth.admin-otp-verification');
    }
}
