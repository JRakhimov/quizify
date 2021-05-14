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
    return "welcome";
});

Route::group(['prefix' => 'teacher'], function() {
    Route::get('', function () {
        return view('teacher.index');
    });

    Route::get('/sign-in', function () {
        return view('teacher.sign_in');
    });

    Route::get('/quiz/create', function () {
        return view('teacher.quiz_create');
    });
});

Route::group(['prefix' => 'student'], function() {
    Route::get('/sign-in', function () {
        return view('student.sign_in');
    });
});

Route::get('/signUp', 'AuthController@getSignup')->name('auth.signUp');
Route::post('/signUp', 'AuthController@postSignup');

Route::get('/signIn', 'AuthController@getSignin')->name('auth.signIn');
Route::post('/signIn', 'AuthController@postSignin');
