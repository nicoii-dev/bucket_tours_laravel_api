<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('forgot-password', 'ForgotPasswordController@forgotPassword')->middleware('guest')->name('password.email');
        Route::post('reset-password', 'ForgotPasswordController@resetPassword')->middleware('guest')->name('password.reset');
        Route::post('verify-email', 'AuthController@verifyEmail');
    });

     //for authenticated
     Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::post('logout', 'AuthController@logout');
            Route::post('verify-token', 'AuthController@verifyToken');
            Route::post('change-password', 'AuthController@changePassword');
        });
    });
});
