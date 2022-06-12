<?php

use App\Http\Controllers\admin\AdminCustomerSupportController;
use App\Http\Controllers\Admin\AdminManageOrders;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserBodyMeasurementsController;
use App\Http\Controllers\User\UserAppointmentController;
use App\Http\Controllers\User\UserManageOrdersController;
use App\Http\Controllers\Admin\AdminManageUserController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Orders_pages\CancelOrdersController;
use App\Http\Controllers\Admin\Orders_pages\CompleteOrdersController;
use App\Http\Controllers\Admin\Orders_pages\DeliveryOrdersController;
use App\Http\Controllers\Admin\Orders_pages\NewOrdersController;
use App\Http\Controllers\Admin\Orders_pages\ProcessingOrdersController;
use App\Http\Controllers\Admin\Queries_pages\CompleteQueriesController;
use App\Http\Controllers\Admin\Queries_pages\NewQueriesController;
use App\Http\Controllers\User\UserFeedbackController;

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
Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/', [MainController::class, 'contactData'])->name('home');

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
Route::get('/user-manage-orders', [UserManageOrdersController::class, 'userManageAppointments'])->name('user-manage-orders');

// User Manage Address page
Route::get('/user-manage-address', [UserAddressController::class, 'viewData'])->name('user-manage-address');
Route::post('/user-manage-address', [UserAddressController::class, 'updateData'])->name('user-manage-address');

// User Feedback page
Route::get('/user-feedback', [UserFeedbackController::class, 'viewData'])->name('user-feedback');
Route::post('/user-feedback', [UserFeedbackController::class, 'updateData'])->name('user-feedback');

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
Route::get('/admin-profile', [AdminProfileController::class, 'viewData'])->name('admin-profile');
Route::post('/admin-profile', [AdminProfileController::class, 'updateData'])->name('admin-profile');

// Admin Manage Orders page.
Route::get('/admin-manage-orders', [AdminManageOrders::class, 'viewData'])->name('admin-manage-orders');

// ------- Admin Appointment pages-------

// Admin New Appointments page.
Route::get('/admin-manage-orders/new-appointments', [NewOrdersController::class, 'appointmentsViewData'])->name('new-appointments');
Route::post('/admin-manage-orders/new-appointments', [NewOrdersController::class, 'appointmentsUpdateStatus'])->name('new-appointments');

// Admin Processing Appointments page.
Route::get('/admin-manage-orders/processing-appointments', [ProcessingOrdersController::class, 'processingViewData'])->name('processing-appointments');
Route::post('/admin-manage-orders/processing-appointments', [ProcessingOrdersController::class, 'processingUpdateStatus'])->name('processing-appointments');

// Admin Delivery Appointments page.
Route::get('/admin-manage-orders/delivery-appointments', [DeliveryOrdersController::class, 'deliveryViewData'])->name('delivery-appointments');
Route::post('/admin-manage-orders/delivery-appointments', [DeliveryOrdersController::class, 'deliveryUpdateStatus'])->name('delivery-appointments');

// Admin Complete Appointments page.
Route::get('/admin-manage-orders/complete-appointments', [CompleteOrdersController::class, 'completeViewData'])->name('complete-appointments');

// Admin Cancel Appointments page.
Route::get('/admin-manage-orders/cancel-appointments', [CancelOrdersController::class, 'cancelViewData'])->name('cancel-appointments');

// ------- Admin Shopping pages-------

// Admin New Order page.
Route::get('/admin-manage-orders/new-orders', [NewOrdersController::class, 'ordersViewData'])->name('new-orders');

// Manage Users page.
Route::get('/admin-manage-users', [AdminManageUserController::class, 'viewData'])->name('manage-users');

// Customer Support page.
Route::get('/admin-customer-support', [AdminCustomerSupportController::class, 'viewData'])->name('customer-support');

// Total Quarries page.
Route::get('/admin-customer-support/total-queries', [MainController::class, 'totalQueries'])->name('total-queries');

// New Quarries page.
Route::get('/admin-customer-support/new-queries', [NewQueriesController::class, 'quarriesViewData'])->name('new-queries');
Route::post('/admin-customer-support/new-queries', [NewQueriesController::class, 'quarriesUpdateStatus'])->name('new-queries');

// Complete Quarries page.
Route::get('/admin-customer-support/complete-queries', [CompleteQueriesController::class, 'quarriesViewData'])->name('complete-queries');