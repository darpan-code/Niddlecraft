<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Home Page
    function index(Request $request){

        if ($request->session()->has('id')) {
            $userLogin = $request->session()->has('id');
            $userName = session('name');
        }else{
            $userLogin = $request->session()->has('id');
            $userName = '';
        }

        $testimonial = DB::table('user_feedback')
                            ->leftJoin('user_profile', 'user_feedback.user_id', '=', 'user_profile.uid')
                            ->limit(3)
                            ->get();

        return view('home', ['testimonial' => $testimonial, 'userLogin' =>$userLogin, 'userName' =>$userName]);
    }

    // Contact Page
    function contactData(Request $request){

        // validation
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:40',
            'message' => 'required|max:150'
        ]);

        // set form data to variable
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // inesert data into database
        $insertData = DB::table('customers_queries')->insert([
                                'name' => $name,
                                'email' => $email,
                                'subject' => $subject,
                                'message' => $message
                            ]);

        if ($insertData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect(asset('/#contact'))->with('status', $UpdateStatus);
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

}
