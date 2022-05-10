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

    // User Profile page
    function userProfile(){
        return view('user.user-profile');
    }

    // User Manage Orders page
    function userManageOrders(){
        return view('user.user-manage-orders');
    }

    // User Manage Address page
    function userManageAddress(){
        return view('user.user-manage-address');
    }

    // User Gifts & Rewards page
    function userGiftsRewards(){
        return view('user.user-gifts-&-rewards');
    }

    // User Body Measurements page
    function userBodyMeasurements(){
        return view('user.user-body-measurements');
    }

    // User Body Measurements page
    function userAppointment(){
        return view('services.user-appointment');
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
