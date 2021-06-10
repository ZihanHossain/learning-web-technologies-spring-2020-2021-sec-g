<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/login', ['uses'=>'App\Http\Controllers\LoginController@index']);
Route::post('/login', 'App\Http\Controllers\LoginController@verify');

Route::get('/home', ['uses'=>'App\Http\Controllers\HomeController@index']);
Route::post('/home', 'App\Http\Controllers\HomeController@verify');

Route::get('/logout', ['uses'=>'App\Http\Controllers\LogoutController@index']);
Route::post('/logout', 'App\Http\Controllers\LogoutController@verify');

Route::get('/user/list', ['uses'=>'App\Http\Controllers\UserController@index']);

Route::get('/user/create', 'App\Http\Controllers\UserController@create');
Route::post('/user/create', 'App\Http\Controllers\UserController@insert');
Route::get('/user/details/{id}', 'App\Http\Controllers\UserController@details');

Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit');
Route::post('/user/edit/{id}', 'App\Http\Controllers\UserController@update');

Route::get('/user/delete/{id}', 'App\Http\Controllers\UserController@delete');
Route::post('/user/delete/{id}', 'App\Http\Controllers\UserController@destroy');

Route::get('/user/delete/confirm/{id}', 'App\Http\Controllers\UserController@destroy');

Route::get('/register', function () {
    echo "This is Signup Page...";
});

