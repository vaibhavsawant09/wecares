<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('forgot_password', function () {
    return view('forgot_password');
});
Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('404', function () {
    return view('404');
});
Route::get('apply_form', function () {
    return view('apply_form');
});

//Admin Dashboard route start from here
Route::get('ins_dashboard', function () {
    return view('ins_dashboard/index');
});
Route::get('ins_dashboard/categories', function () {
    return view('ins_dashboard/categories');
});
Route::get('ins_dashboard/add_categories', function () {
    return view('ins_dashboard/add_categories');
});
Route::get('ins_dashboard/sub_categories', function () {
    return view('ins_dashboard/sub_categories');
});

Route::get('ins_dashboard/add_subcategories', function () {
    return view('ins_dashboard/add_subcategories');
});
Route::get('ins_dashboard/ticket_categories', function () {
    return view('ins_dashboard/ticket_categories');
});
Route::get('ins_dashboard/add_ticket_categories', function () {
    return view('ins_dashboard/add_ticket_categories');
});
Route::get('ins_dashboard/policies', function () {
    return view('ins_dashboard/policies');
});
Route::get('ins_dashboard/add_policy', function () {
    return view('ins_dashboard/add_policy');
});
Route::get('ins_dashboard/staff', function () {
    return view('ins_dashboard/staff');
});
Route::get('ins_dashboard/add_staff', function () {
    return view('ins_dashboard/add_staff');
});
Route::get('ins_dashboard/users', function () {
    return view('ins_dashboard/users');
});
Route::get('ins_dashboard/notifications', function () {
    return view('ins_dashboard/notifications');
});
Route::get('ins_dashboard/policy_holders', function () {
    return view('ins_dashboard/policy_holders');
});
Route::get('ins_dashboard/profile', function () {
    return view('ins_dashboard/profile');
});
Route::get('ins_dashboard/support_ticket', function () {
    return view('ins_dashboard/support_ticket');
});
Route::get('ins_dashboard/system_setting', function () {
    return view('ins_dashboard/system_setting');
});
Route::get('ins_dashboard/report', function () {
    return view('ins_dashboard/report');
});
Route::get('ins_dashboard/report_result', function () {
    return view('ins_dashboard/report_result');
});

//User Dashboard route start from here
Route::get('user_dashboard', function () {
    return view('user_dashboard/index');
});
Route::get('user_dashboard/apply_policies', function () {
    return view('user_dashboard/apply_policies');
});
Route::get('user_dashboard/pending_policy', function () {
    return view('user_dashboard/pending_policy');
});
Route::get('user_dashboard/approved_policies', function () {
    return view('user_dashboard/approved_policies');
});
Route::get('user_dashboard/rejected_policies', function () {
    return view('user_dashboard/rejected_policies');
});
Route::get('user_dashboard/support_ticket', function () {
    return view('user_dashboard/support_ticket');
});
Route::get('user_dashboard/add_ticket_categories', function () {
    return view('user_dashboard/add_ticket_categories');
});
Route::get('user_dashboard/report', function () {
    return view('user_dashboard/report');
});
Route::get('user_dashboard/report_result', function () {
    return view('user_dashboard/report_result');
});
Route::get('user_dashboard/profile', function () {
    return view('user_dashboard/profile');
});
Route::get('user_dashboard/notifications', function () {
    return view('user_dashboard/notifications');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
