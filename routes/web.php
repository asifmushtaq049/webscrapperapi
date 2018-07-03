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

Route::get('/', function () {
    return view('index');
});
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');

Route::get('/dashboard/login', 'Auth\LoginController@showLoginForm');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/dashboard/login', 'Auth\LoginController@login');

        // Registration Routes...
Route::get('/dashboard/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/dashboard/register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('/dashboard/password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->middleware('auth');
Route::post('/dashboard/password/email', 'Auth\ResetPasswordController@sendResetLinkEmail')->middleware('auth');
Route::post('/dashboard/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/dashboard/alldomains', function(){
    return view('dashboard.alldomains');
})->middleware('auth');

Route::get('/dashboard/adddomain', function () {
    return view('dashboard.adddomain');
})->middleware('auth');

Route::get('/dashboard/docs', function () {
    return view('dashboard.docs');
})->middleware('auth');

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
    Route::get('/dashboard/usermanual', function () {
        return view('dashboard.usermanual');
    })->middleware('auth');
});

// Route::get('/dashboard/usermanual', function () {
//     return view('dashboard.usermanual');
// })->middleware('auth');

Route::get('/dashboard/getapi', function () {
    return view('dashboard.getapi');
})->middleware('auth');
 Route::get('/dashboard/viewprofile','FetchDataFromDB@viewProfile');

Route::get('/dashboard/editprofile', function () {
    return view('dashboard.editprofile');
})->middleware('auth');

Route::post('/login-verification', 'loginController@login')->middleware('auth');
Route::post('/register-verification', 'registerController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->middleware('auth');
});


//      Admin Routes
Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
    Route::get('/admin', function () {
        return view('admin.admin_index');
    })->middleware('is_admin');
});

// Route::get('/admin', function () {
//     return view('admin.admin_index');
// })->middleware('is_admin');

// Route::get('/admin/fetch_daraz', function () {
//     return view('admin.fetch_daraz');
// });

// Route::get('/admin/fetch_alibaba', function () {
//     return view('admin.fetch_alibaba');
// });

// Route::get('/admin/fetch_ebay', function () {
//     return view('admin.fetch_ebay');
// });

Route::get('/admin/delete/{uid}', 'FetchDataFromDB@destroy')->middleware('is_admin');

Route::get('/admin/change_status/{uid}','FetchDataFromDB@status')->middleware('is_admin');
Route::post('/admin/change_status/{uid}','FetchDataFromDB@statusUpdate')->middleware('is_admin');

Route::get('/admin/users','FetchDataFromDB@index')->middleware('is_admin');

//Scraping Routes
Route::get('/admin/fetch_alibaba','WebController@scrapAlibaba')->middleware('is_admin');
Route::get('/admin/fetch_ebay','WebController@scrapEbay')->middleware('is_admin');
Route::get('/admin/fetch_daraz','WebController@scrapDaraz')->middleware('is_admin');

Route::get('/admin/users','FetchDataFromDB@index')->middleware('is_admin');

Route::post('/dashboard/getapi/data', 'FetchController@getApi')->middleware('auth');
Route::get('/dashboard/data/{d}/{t}/{f}', 'FetchController@fetchdata');
Route::post('/dashboard/data', 'FetchController@restful');