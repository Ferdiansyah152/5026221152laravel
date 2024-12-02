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

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/Hello', function () {
    return view('Hello');
});

Route::get('/Style', function () {
    return view('Style');
});

Route::get('/MyStyle', function () {
    return view('MyStyle');
});

Route::get('/Style2', function () {
    return view('Style2');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/Latsol', function () {
    return view('Latsol');
});

Route::get('/UTS', function () {
    return view('UTS');
});

Route::get('/', function () {
    return view('hitung');
});

Route::get('/pegawai','App\Http\Controllers\PegawaiControllerDB@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiControllerDB@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiControllerDB@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiControllerDB@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiControllerDB@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiControllerDB@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiControllerDB@cari');

Route::get('/minuman','App\Http\Controllers\MinumanController@indexminum');
Route::post('/minuman/ubahtersedia/{id}', 'App\Http\Controllers\MinumanController@ubahTersedia');
Route::get('/minuman/tambah', 'App\Http\Controllers\MinumanController@tambah');
Route::post('/minuman/store', 'App\Http\Controllers\MinumanController@store');
Route::post('/minuman/update', 'App\Http\Controllers\MinumanController@update');
Route::get('/minuman/edit/{id}', 'App\Http\Controllers\MinumanController@edit');
Route::get('/minuman/hapus/{id}', 'App\Http\Controllers\MinumanController@hapus');
Route::get('/minuman/cari', 'App\Http\Controllers\MinumanController@cari');
