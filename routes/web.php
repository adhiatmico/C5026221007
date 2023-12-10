





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


Route::get('/blog', function (){
    return view('home') ;
});

Route::get('/blog/tentang', function (){
    return view('tentang') ;
});


Route::get('/blog/kontak', function (){
    return view('kontak') ;
});




Route::get('js1', function (){
    return view('js1') ;
});

Route::get('js2', function (){
    return view('js2') ;
});

Route::get('link', function (){
    return view('link') ;
});
Route::get('style', function (){
    return view('style') ;
});
Route::get('responsive', function (){
    return view('responsive') ;
});
Route::get('ganjil', function (){
    return view('ganjil') ;
});
Route::get('miniso', function (){
    return view('miniso') ;
});
Route::get('abbreviations', function (){
    return view('abbreviations') ;
});
Route::get('blockquotes', function (){
    return view('blockquotes') ;
});
Route::get('DList', function (){
    return view('DList') ;
});
Route::get('Kinputs', function (){
    return view('Kinputs') ;
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@index');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/nilaikuliah','App\Http\Controllers\MahasiswaController@index');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\MahasiswaController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\MahasiswaController@store');
Route::get('/nilaikuliah/edit/{ID}','App\Http\Controllers\MahasiswaController@edit');
Route::post('/nilaikuliah/update','App\Http\Controllers\MahasiswaController@update');
Route::get('/nilaikuliah/hapus/{ID}','App\Http\Controllers\MahasiswaController@hapus');

Route::get('/nilaikuliah/cari','App\Http\Controllers\MahasiswaController@cari');


Route::get('/nilaikuliah/view/{ID}','App\Http\Controllers\MahasiswaController@view');



Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');


Route::get('/kursi','App\Http\Controllers\KursiController@index');
Route::get('/kursi/tambahkursi','App\Http\Controllers\KursiController@tambah');
Route::post('/kursi/store','App\Http\Controllers\KursiController@store');
Route::get('/kursi/edit/{kodekursi}','App\Http\Controllers\KursiController@edit');
Route::post('/kursi/update','App\Http\Controllers\KursiController@update');
Route::get('/kursi/hapus/{kodekursi}','App\Http\Controllers\KursiController@hapus');


Route::get('/kursi/cari','App\Http\Controllers\KursiController@cari');


Route::get('/kursi/viewkursi/{kodekursi}','App\Http\Controllers\KursiController@view');
