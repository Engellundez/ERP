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

// UNIVERSIDAD
Route::get('Universidad', 'UniversidadController@index')->name('uni');
Route::get('Universidad/Registrar', 'UniversidadController@create')->name('uni_create');
Route::post('Universidad/crear', 'UniversidadController@store')->name('uni_guardar');
Route::get('Universidad/Editar/{id}', 'UniversidadController@edit')->name('uni_editar');
Route::put('Universidad/actualizar/{id}', 'UniversidadController@update')->name('uni_actualizar');
Route::delete('Universidad/eliminar/{id}', 'UniversidadController@destroy')->name('uni_eliminar');

// CONTROL ESTUDIANTIL

// PERSONAL