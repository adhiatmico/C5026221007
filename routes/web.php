





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
