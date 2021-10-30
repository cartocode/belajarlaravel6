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

// Route::get('/user/{id}/article/{articleId}', function($id, $articleId){
//     return 'user' . $id . 'Artikel' .$articleId;
// });
Route::get('/user/{id?}', function($id = null){
    return 'user' . $id;
});