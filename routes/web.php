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
    return view('landingpage');
});

Route::get('laravel-welcome', function(){
    return view('welcome');
});

Route::get('laravel-blog', function(){
    return view('blog');
});

Route::get('laravel-ppt', function(){
    return view('pptlaravel');
});

Route::get('uts-aboutme', function(){
    return view('uts1');
});

// ... (other routes)

Route::get('tugas-linktree', function(){
    return view('linktree');
});

Route::get('javascript-js1', function(){
    return view('js1');
});

// ... (other routes)

Route::get('html-ppt', function(){
    return view('ppthtml');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function(){
    return view('home');
});

Route::get('/blog/tentang', function(){
    return view('tentang');
});

Route::get('/blog/kontak', function(){
    return view('kontak');
});

// Route CRUD Pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari/','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// Route CRUD Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/add','App\Http\Controllers\NilaiKuliahController@add');
Route::post('/nilaikuliah/save','App\Http\Controllers\NilaiKuliahController@save');

// Route CRUD Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index3');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');


// Route CRUD Modem
Route::get('/modem','App\Http\Controllers\ModemController@indexmodem');
Route::get('/modem/tambahmodem','App\Http\Controllers\ModemController@tambahmodem');
Route::post('/modem/store','App\Http\Controllers\ModemController@store');
Route::get('/modem/editmodem/{id}','App\Http\Controllers\ModemController@editmodem');
Route::post('/modem/update','App\Http\Controllers\ModemController@update');
Route::get('/modem/hapus/{id}','App\Http\Controllers\ModemController@hapus');
Route::get('/modem/cari/','App\Http\Controllers\ModemController@cari');
Route::get('/modem/viewmodem/{id}','App\Http\Controllers\ModemController@viewmodem');

// Route Kategori
Route::get('/kategori', 'App\Http\Controllers\KategoriController@indexkategori');
Route::post('/submitKategori', 'App\Http\Controllers\KategoriController@submitKategori');

