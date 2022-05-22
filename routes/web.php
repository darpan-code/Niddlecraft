<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\BodyMeasurementsController;

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
Route::get('/user-profile', [UserProfileController::class, 'viewData'])->name('user-profile');
Route::post('/user-profile', [UserProfileController::class, 'updateData'])->name('user-profile');

// User Manage Orders page
Route::get('/user-manage-orders', [MainController::class, 'userManageOrders'])->name('user-manage-orders');

// User Manage Address page
Route::get('/user-manage-address', [UserAddressController::class, 'viewData'])->name('user-manage-address');
Route::post('/user-manage-address', [UserAddressController::class, 'updateData'])->name('user-manage-address');

// User Gifts & Rewards page
Route::get('/user-gifts-&-rewards', [MainController::class, 'userGiftsRewards'])->name('user-gifts-&-rewards');

// User Body Measurement page
Route::get('/user-body-measurements', [BodyMeasurementsController::class, 'viewData'])->name('user-body-measurements');
Route::post('/user-body-measurements', [BodyMeasurementsController::class, 'updateData'])->name('user-body-measurements');

// User Appointment page
Route::get('/user-appointment', [MainController::class, 'userAppointment'])->name('user-appointment');

// Admin Login page.
Route::get('/admin-login', [MainController::class, 'adminLogin'])->name('admin-login');

// Admin forgot password page.
Route::get('/admin-forgot-password', [MainController::class, 'adminForgotPassword'])->name('admin-forgot-password');

// Admin otp verification page.
Route::get('/admin-otp-verification', [MainController::class, 'adminOtpVerify'])->name('admin-otp-verification');

// Admin Profile page.
Route::get('/admin-profile', [MainController::class, 'adminProfile'])->name('admin-profile');

// Manage Users page.
Route::get('/manage-users', [MainController::class, 'manageUsers'])->name('manage-users');

// Customer Support page.
Route::get('/customer-support', [MainController::class, 'customerSupport'])->name('customer-support');

// Total Quarries page.
Route::get('/total-queries', [MainController::class, 'totalQueries'])->name('total-queries');

// New Quarries page.
Route::get('/new-queries', [MainController::class, 'newQueries'])->name('new-queries');

// Complete Quarries page.
Route::get('/complete-queries', [MainController::class, 'completeQueries'])->name('complete-queries');