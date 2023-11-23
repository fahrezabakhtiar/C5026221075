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

Route::get('uts-professional', function(){
    return view('uts2');
});

Route::get('uts-course', function(){
    return view('uts3');
});

Route::get('uts-volunteer', function(){
    return view('uts4');
});

Route::get('uts-contact', function(){
    return view('uts5');
});

Route::get('tugas-layout', function(){
    return view('layout');
});

Route::get('tugas-form-asisten', function(){
    return view('formasisten');
});

Route::get('tugas-list-active-state', function(){
    return view('activestatelist');
});

Route::get('tugas-basic-list-group', function(){
    return view('basiclistgroup');
});

Route::get('tugas-list-group-with-a-disabled-item', function(){
    return view('disableditem');
});

Route::get('tugas-list-group-with-linked-items', function(){
    return view('linkeditems');
});

Route::get('tugas-linktree', function(){
    return view('linktree');
});

Route::get('javascript-js1', function(){
    return view('js1');
});

Route::get('javascript-js2', function(){
    return view('js2');
});

Route::get('javascript-ppt', function(){
    return view('pptjs');
});

Route::get('bootstrap-responsive', function(){
    return view('responsive');
});

Route::get('bootstrap-responsive2', function(){
    return view('responsive2');
});

Route::get('css-hello', function(){
    return view('hellocss');
});

Route::get('css-link', function(){
    return view('link');
});

Route::get('css-style', function(){
    return view('style');
});

Route::get('css-ppt', function(){
    return view('pptcss');
});

Route::get('html-hello', function(){
    return view('hellohtml');
});

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

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
