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

// Route::get('/', function () {
//     return view('welcome');
// });

//Authentication Route
// Route::get('auth/login', 'Auth\LoginController@showLoginForm');
// Route::post('auth/login', 'Auth\LoginController@postLogin');
// Route::get('auth/logout', 'Auth\LoginController@logout');
// Route::post('auth/logout', 'Auth\RegisterController@postLogout');

//Registration Route
// Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('auto/register', 'Auth\RegisterController@postRegister');


Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('hello', 'PagesController@getHello');

//自动添加PostController路径
//可用php artisan route:list 检测
Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
