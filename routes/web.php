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
    return view('layouts.signin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin','AdminController');

Route::resource('user','UserController');

// Route::get('menuPasien','StaticController@pasien');

// Route::get('tambah','StaticController@tambahPasien');

Route::resource('pasien','PasienController');

Route::get('img','StaticController@img');

Route::resource('RekamMedis','RekamMedisController');

