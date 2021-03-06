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
Route::prefix('account')->group(function() {
    //definisikan route
    Route::prefix('setting')->group(function() {
        Route::get('/change-password', function() {
            return 'change-password';
        });
        Route::get('/profile', function() {
            return 'Profile';
        });
        Route::get('/photo', function() {
            return 'Photo';
        });
    });
    Route::get('follower', function() {
        return 'follower';
    });
});
