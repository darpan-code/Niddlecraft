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

// User Profile page
Route::get('/user-profile', [MainController::class, 'userProfile'])->name('user-profile');

// User Manage Orders page
Route::get('/user-manage-orders', [MainController::class, 'userManageOrders'])->name('user-manage-orders');

// User Manage Address page
Route::get('/user-manage-address', [MainController::class, 'userManageAddress'])->name('user-manage-address');

// User Gifts & Rewards page
Route::get('/user-gifts-&-rewards', [MainController::class, 'userGiftsRewards'])->name('user-gifts-&-rewards');

// User Body Measurement page
Route::get('/user-body-measurements', [MainController::class, 'userBodyMeasurements'])->name('user-body-measurements');