<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/servicios', ['as'=>'servicios','uses'=>function () {return view('servicios');}]);
Route::get('/contacto', ['as'=>'contacto','uses'=>function () {return view('contacto');}]);
Route::post('/contactar', 'EmailController@contact')->name('contact');