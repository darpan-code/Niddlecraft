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

    // User Manage Orders page
    function userManageOrders(){
        return view('user.user-manage-orders');
    }

    // User Gifts & Rewards page
    function userGiftsRewards(){
        return view('user.user-gifts-&-rewards');
    }

    // User Appointment page
    function userAppointment(){
        return view('services.user-appointment');
    }
}
