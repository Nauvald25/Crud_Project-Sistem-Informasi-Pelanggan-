<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\DB;
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

Route::get('/pelanggan','App\Http\Controllers\PelangganController@index');
Route::get('/pelanggan/create','App\Http\Controllers\PelangganController@create');
Route::post('/pelanggan/store','App\Http\Controllers\PelangganController@store');
Route::get('/pelanggan/ubah/{id}','App\Http\Controllers\PelangganController@ubah');
Route::get('/pelanggan/hapus/{id}','App\Http\Controllers\PelangganController@hapus');
Route::post('/pelanggan/update/{id}','App\Http\Controllers\PelangganController@update');

