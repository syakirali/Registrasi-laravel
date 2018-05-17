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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login-form');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/tampil', 'RegistrasiController@tampil')->name('tampil')->middleware('auth');
Route::get('/registrasi', 'RegistrasiController@form')->name('daftar-form');
Route::post('/registrasi', 'RegistrasiController@daftar')->name('daftar');
Route::get('/logout', 'LoginController@logout')->name('logout');
