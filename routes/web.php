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


//可用php artisan route:list 检测
Route::get('/', 'HomeController@index');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('hello', 'PagesController@getHello');
Route::get('result', 'PagesController@getLotteryResult')->name('result');

//自动添加PostController路径
Route::resource('posts', 'PostController');
Auth::routes();

//name 代表昵称
Route::get('/home', 'HomeController@index')->name('home');

//添加板块路径
Route::get('/platform/{id}', 'PlatformController@index')->name('platform');
Route::get('/create/{platform}', 'PlatformController@create')->name('create');