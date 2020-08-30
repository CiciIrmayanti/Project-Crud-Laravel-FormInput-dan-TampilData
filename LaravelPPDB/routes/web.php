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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calonsiswa', 'CalonSiswaController@index')->name('calonsiswa.index');
Route::get('/calonsiswa/create', 'CalonSiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa', 'CalonSiswaController@store')->name('calonsiswa.store');

Route::get('cpdb', 'CalonSiswaController@show');

Route::get('/calonsiswa/{calonsiswa}', 'CalonSiswaController@tampil');
