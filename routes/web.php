<?php

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
Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/register',function(){
    return view('dashboard.register');
});


Route::get('/dashboard/login', function () {
    return view('dashboard.login');
});

Route::get('/dashboard/forgot-password', function () {
    return view('dashboard.forgot-password');
});


Route::get('/dashboard/alldomains', function(){
    return view('dashboard.alldomains');
});

Route::get('/dashboard/adddomain', function () {
    return view('dashboard.adddomain');
});

Route::get('/dashboard/docs', function () {
    return view('dashboard.docs');
});

Route::get('/dashboard/usermanual', function () {
    return view('dashboard.usermanual');
});

Route::get('/dashboard/getapi', function () {
    return view('dashboard.getapi');
});
Route::get('/dashboard/viewprofile', function () {
    return view('dashboard.viewprofile');
});

Route::get('/dashboard/editprofile', function () {
    return view('dashboard.editprofile');
});

Route::post('/login-verification', 'loginController@login');
Route::get('/logout', 'LogoutController@logout');

Route::get('login-success', function () {
    return redirect('/dashboard');
});