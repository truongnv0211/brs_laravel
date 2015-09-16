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
// Static Page

Route::get('/', ['as' => 'staticpage.home', 'uses' => 'StaticPageController@home']);
Route::get('/help', ['as' => 'staticpage.help', 'uses' => 'StaticPageController@help']);

// Authentication routes...

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Admin area controller....

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::get('dashboard', 'DashboardController@index');
    Route::resource('book', 'BookController');
    Route::resource('category', 'CategoryController', ['except' => 'show']);
});
