<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Login
Route::get('/', 'Frontend\FrontendController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Frontend ...
Route::get('khoa', 'Frontend\FrontendController@khoa');
Route::get('tin-tuc', 'Frontend\FrontendController@tintuc');
Route::get('hop-tac-quoc-te', 'Frontend\FrontendController@hoptacquocte');
Route::get('phong-ban', 'Frontend\FrontendController@phongban');
Route::get('gioi-thieu', 'Frontend\FrontendController@gioithieu');
Route::get('hoi-dap', 'Frontend\FrontendController@hoidap');
Route::get('lien-he', 'Frontend\FrontendController@lienhe');
Route::get('dang-ky-xet-tuyen-truc-tuyen', 'Frontend\AdmissionController@getXettuyen')->name('dkxetuyen');
Route::post('store-dang-ky-xet-tuyen-truc-tuyen', 'Frontend\AdmissionController@storeXettuyen')->name('store.xettuyen');
Route::get('dang-ky-thanh-cong', 'Frontend\AdmissionController@dangkythanhcong')->name('dangkythanhcong');
Route::get('bai-viet/{slug}', 'Frontend\FrontendController@postdetail')->name('post.show');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('settings', 'AdminController@settings')->name('admin.settings');
    Route::put('settings', 'AdminController@updateSettings')->name('settings.update');
    
    Route::resource('posts', 'Backend\PostController');
    Route::resource('categories', 'Backend\CategoryController');    
    Route::resource('admissions', 'Backend\AdmissionController'); 
});

// Only for Supper Admin:
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::resource('roles', 'Backend\RoleController');
    Route::resource('users', 'Backend\UserController');
});

// Use for login
Route::auth();