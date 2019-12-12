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

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');