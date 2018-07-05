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

Route::get('/dashboard/login', 'Auth\LoginController@showLoginForm');
Route::get('/admin/login', 'AdminController@showLoginForm');

Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');

Route::post('/dashboard/login', 'Auth\LoginController@login');

        // Registration Routes...
Route::get('/dashboard/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/dashboard/register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('/dashboard/password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->middleware('auth');
Route::post('/dashboard/password/email', 'Auth\ResetPasswordController@sendResetLinkEmail')->middleware('auth');
Route::post('/dashboard/password/reset', 'Auth\ResetPasswordController@reset')->middleware('auth');

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/dashboard/docs', function () {
      return view('dashboard.docs');
  })->middleware('auth');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/dashboard/usermanual', function () {
      return view('dashboard.usermanual');
  })->middleware('auth');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
    Route::get('/dashboard/viewprofile','UserController@viewProfile')->middleware('auth');
});

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

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
    Route::get('/admin/delete/{uid}', 'UserController@destroy')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/change_status/{uid}','UserController@status')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::post('/admin/change_status/{uid}','UserController@statusUpdate')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/provided_websites', function () {
      return view('admin.provided_websites');
  })->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/view_admin_profile','UserController@viewAdminProfile')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/users','UserController@index')->middleware('is_admin');
});

//Scraping Routes
Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_alibaba','WebController@scrapAlibaba')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_ebay','WebController@scrapEbay')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_daraz','WebController@scrapDaraz')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_gsmarena','WebController@scrapGsmarena')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_mobilephone','WebController@scrapMobilephone')->middleware('is_admin');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/admin/fetch_urdupoint','WebController@scrapUrdupoint')->middleware('is_admin');
});

//getApi
Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/dashboard/data/{d}/{t}/{f}/{a}', 'FetchController@fetchdata')->middleware('auth');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::post('/dashboard/data', 'FetchController@restful')->middleware('auth');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/dashboard/getapi','FetchController@getWebsite')->middleware('auth');
});
