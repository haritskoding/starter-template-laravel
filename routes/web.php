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

Route::get('/admin', 'BerandaController@index')->name('beranda');

Route::get('/', 'AuthentikasiController@index')->name('login');
Route::post('login', 'AuthentikasiController@login')->name('login');



Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');
Route::get('/create-pegawai', 'PegawaiController@create')->name('create-pegawai');
Route::post('/simpan-pegawai', 'PegawaiController@store')->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', 'PegawaiController@edit')->name('edit-pegawai');
Route::get('/delete-pegawai/{id}', 'PegawaiController@destroy')->name('delete-pegawai');

Route::get('/data-customers', 'CustomersController@index')->name('data-customers');
Route::get('/create-customers', 'CustomersController@create')->name('create-customers');
Route::post('/save-customers', 'CustomersController@store')->name('save-customers');


// Auth::routes();
Route::get('/data-position', 'PositionController@index')->name('data-position');
Route::get('/create-position', 'PositionController@create')->name('create-position');
Route::post('/save-position', 'PositionController@store')->name('save-position');
Route::get('/edit-position/{id}', 'PositionController@edit')->name('edit-position');
Route::get('/delete-position/{id}', 'PositionController@destroy')->name('delete-position');

// Auth::routes();