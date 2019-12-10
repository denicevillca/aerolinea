<?php


Route::get('/', function(){
return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cliente','ClienteController');
Route::resource('pasaje','PasajeController');
Route::resource('vuelo','VueloController');

Route::resource('corporacion','CorporacionController');