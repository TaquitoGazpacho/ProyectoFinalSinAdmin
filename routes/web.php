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
    return view('welcome');
});

//Auth::routes();
Route::get('/login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\User\LoginController@login');
Route::post('/logout', 'Auth\User\LoginController@logout')->name('logout');
Route::post('/password/email', 'Auth\User\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\User\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\User\ForgotPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\User\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('/register', 'Auth\User\RegisterController@register');
Route::get('/register', 'Auth\User\RegisterController@showRegistrationForm')->name('register');




Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    //Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');
    //Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    //Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    //Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    //Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::get('/verifyemail/{token}', 'Auth\User\RegisterController@verify');