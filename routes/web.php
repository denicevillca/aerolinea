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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contacto', function(){
return view('contacto');
})->name('contacto');

Route::get('compañia', function(){
return view('dcompañia');
})->name('compañia');

Route::get('pasaje', function(){
return view('bpasaje');
})->name('pasaje');

Route::get('vuelo', function(){
return view('avuelo');
})->name('vuelo');
