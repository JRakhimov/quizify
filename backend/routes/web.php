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
})->name('home');

Route::get('/signUp', 'AuthController@getSignup')->name('auth.signUp');
Route::post('/signUp', 'AuthController@postSignup');

Route::get('/signIn', 'AuthController@getSignin')->name('auth.signIn');
Route::post('/signIn', 'AuthController@postSignin');
