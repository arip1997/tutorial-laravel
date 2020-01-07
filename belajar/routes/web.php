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

// Route::get('/profile/{data}', function($data) {
//     return view('profile',compact('data'));
// });

Route::get('/profile/{data}','BelajarController@HanyaTest');
Route::get('form','BelajarController@form'); //memanggil view form
Route::post('profile','BelajarController@getProfile'); //mengirim data ke controller