<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmpresaController@index')->name('index');
Route::get('/servicios', 'EmpresaController@servicios')->name('servicios');
Route::get('/contacto', 'EmpresaController@contacto')->name('contcto');
Route::post('/contactar', 'EmailController@contact')->name('contact');