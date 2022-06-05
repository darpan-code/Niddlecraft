<?php

use App\Http\Controllers\Admin\AdminManageOrders;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserBodyMeasurementsController;
use App\Http\Controllers\User\UserAppointmentController;
use App\Http\Controllers\Admin\AdminManageUserController;

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

// ********************* User side Routes *********************

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
Route::get('/user-body-measurements', [UserBodyMeasurementsController::class, 'viewData'])->name('user-body-measurements');
Route::post('/user-body-measurements', [UserBodyMeasurementsController::class, 'updateData'])->name('user-body-measurements');

// User Appointment page
Route::get('/user-appointment', [UserAppointmentController::class, 'viewData'])->name('user-appointment');
Route::post('/user-appointment', [UserAppointmentController::class, 'insertData'])->name('user-appointment');


// ********************* Admin side Routes *********************

// Admin Login page.
Route::get('/admin-login', [MainController::class, 'adminLogin'])->name('admin-login');

// Admin Forgot Password page.
Route::get('/admin-forgot-password', [MainController::class, 'adminForgotPassword'])->name('admin-forgot-password');

// Admin OTP Verification page.
Route::get('/admin-otp-verification', [MainController::class, 'adminOtpVerify'])->name('admin-otp-verification');

// Admin Profile page.
Route::get('/admin-profile', [MainController::class, 'adminProfile'])->name('admin-profile');

// Manage Orders page.
Route::get('/admin-manage-orders', [AdminManageOrders::class, 'viewData'])->name('admin-manage-orders');

// Manage Users page.
Route::get('/admin-manage-users', [AdminManageUserController::class, 'viewData'])->name('manage-users');

// Customer Support page.
Route::get('/admin-customer-support', [MainController::class, 'customerSupport'])->name('customer-support');

// Total Quarries page.
Route::get('/admin-customer-support/total-queries', [MainController::class, 'totalQueries'])->name('total-queries');

// New Quarries page.
Route::get('/admin-customer-support/new-queries', [MainController::class, 'newQueries'])->name('new-queries');

// Complete Quarries page.
Route::get('/admin-customer-support/complete-queries', [MainController::class, 'completeQueries'])->name('complete-queries');