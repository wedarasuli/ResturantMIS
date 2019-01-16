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
Route::redirect('/', '/login');

// login
Route::get('/login','LoginController@login');
Route::post('/login/checklogin','LoginController@checklogin');
Route::get('/login/successlogin','LoginController@successlogin');
Route::get('/login/logout','LoginController@logout');
// Route::get('/master', function(){
//     return view('layout.master');
// });




// Route::get('/home', 'HomeController@index')->name('home');
