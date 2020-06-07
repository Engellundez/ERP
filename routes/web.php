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

Route::get('/', 'PagesController@inicio')->name('inicio');
// RECURSOS HUMANOS
Route::get('/RH', 'RecursosHumanosController@index')->name('rh');
Route::get('/RH/Registrar', 'RecursosHumanosController@create')->name('rh_create');
Route::post('/RH/Crear', 'RecursosHumanosController@store')->name('rh_guardar');
Route::get('/RH/Editar/{id}', 'RecursosHumanosController@edit')->name('rh_editar');
Route::put('/RH/actualizar/{id}', 'RecursosHumanosController@update')->name('rhactualizar');
Route::delete('/RH/eliminar/{id}', 'RecursosHumanosController@destroy')->name('rh_eliminar');

// DEPARTAMENTOS