<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home page
Route::get('/', [MainController::class, 'index']);

// User Registration page
Route::get('/registration', [MainController::class, 'userRegistration'])->name('user-registration');

// User Login page
Route::get('/login', [MainController::class, 'userLogin'])->name('user-login');

// User Forgot Password page
Route::get('/forgot-password', [MainController::class, 'forgotPassword'])->name('forgot-password');

// User OTP Verification page
Route::get('/otp-verification', [MainController::class, 'otpVerification'])->name('otp-verification');

// Admin Login page
Route::get('/admin-login', [MainController::class, 'adminLogin'])->name('admin-login');

// Admin forgot password
Route::get('/admin-forgot-password', [MainController::class, 'adminForgotPassword'])->name('admin-forgot-password');

// Admin otp verification
Route::get('/admin-otp-verification', [MainController::class, 'adminOtpVerify'])->name('admin-otp-verification');