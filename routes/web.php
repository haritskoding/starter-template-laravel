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



Route::get('/', 'LoginController@index')->name('login');
Route::post('/postlogin', 'LoginController@postLogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
// Route::post('login', 'AuthentikasiController@login')->name('login');

Route::group(['middleware'=>['auth','ceklevel:1']],function(){
    Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');
    Route::get('/create-pegawai', 'PegawaiController@create')->name('create-pegawai');
    Route::post('/simpan-pegawai', 'PegawaiController@store')->name('simpan-pegawai');
    Route::get('/edit-pegawai/{id}', 'PegawaiController@edit')->name('edit-pegawai');
    Route::get('/delete-pegawai/{id}', 'PegawaiController@destroy')->name('delete-pegawai');
});

Route::group(['middleware'=>['auth','ceklevel:3']],function(){
    Route::get('/profile', 'BerandaController@LookProfile')->name('profile');
});

Route::group(['middleware'=>['auth','ceklevel:1,2']],function(){
    Route::get('/beranda', 'BerandaController@index')->name('beranda');

    Route::get('/data-customers', 'CustomersController@index')->name('data-customers');
    Route::get('/create-customers', 'CustomersController@create')->name('create-customers');
    Route::post('/save-customers', 'CustomersController@store')->name('save-customers');
});

Route::group(['middleware'=>['auth','ceklevel:1,2,3']],function(){
    //halaman login 3 level
    Route::get('/home-employee', 'BerandaController@pageLoginCommonEmployee')->name('home-employee');
    Route::get('/home-customer', 'BerandaController@pageLoginCustomer')->name('home-customer');
    Route::get('/profile', 'BerandaController@LookProfile')->name('profile');
});







// Auth::routes();
Route::get('/data-position', 'PositionController@index')->name('data-position');
Route::get('/create-position', 'PositionController@create')->name('create-position');
Route::post('/save-position', 'PositionController@store')->name('save-position');
Route::get('/edit-position/{id}', 'PositionController@edit')->name('edit-position');
Route::get('/delete-position/{id}', 'PositionController@destroy')->name('delete-position');

// Auth::routes();