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

    // Admin Login page.
    function adminLogin(){
        return view('authentication.adminAuth.admin-login');
    }

    // Admin Forgot Password page.
    function adminForgotPassword(){
        return view('authentication.adminAuth.admin-forgot-password');
    }

    // Admin otp verification page.
    function adminOtpVerify(){
        return view('authentication.adminAuth.admin-otp-verification');
    }

    // Admin Profile page.
    function adminProfile(){
        return view('admin.admin-profile');
    }

    // Customer Support page.
    function customerSupport(){
        return view('admin.admin-customer-support');
    }

    // Total Queries page.
    function totalQueries(){
        return view('admin.customer_queries.total-queries');
    }

    // New Quarries page.
    function newQueries(){
        return view('admin.customer_queries.new-queries');
    }

    // Complete quarries page.
    function completeQueries(){
        return view('admin.customer_queries.complete-queries');
    }
}
