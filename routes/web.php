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
