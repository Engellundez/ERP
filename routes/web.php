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

// DEPARTAMENTOS
Route::get('Departamento', 'DepartamentoController@index')->name('depa');
Route::get('Departamento/Registrar', 'DepartamentoController@create')->name('depa_create');
Route::post('Departamento/crear', 'DepartamentoController@store')->name('depa_guardar');
Route::get('Departamento/Editar/{id}', 'DepartamentoController@edit')->name('depa_editar');
Route::put('Departamento/actualizar/{id}', 'DepartamentoController@update')->name('depa_actualizar');
Route::delete('Departamento/eliminar/{id}', 'DepartamentoController@destroy')->name('depa_eliminar');

// PUESTOS
Route::get('Puesto', 'PuestoController@index')->name('pues');
Route::get('Puesto/Registrar', 'PuestoController@create')->name('pues_create');
Route::post('Puesto/crear', 'PuestoController@store')->name('pues_guardar');
Route::get('Puesto/Editar/{id}', 'PuestoController@edit')->name('pues_editar');
Route::put('Puesto/actualizar/{id}', 'PuestoController@update')->name('pues_actualizar');
Route::delete('Puesto/eliminar/{id}', 'PuestoController@destroy')->name('pues_eliminar');

// ENTIDADES
Route::get('Entidades', 'EntidadController@index')->name('enti');
Route::get('Entidades/Registrar', 'EntidadController@create')->name('enti_create');
Route::post('Entidades/crear', 'EntidadController@store')->name('enti_guardar');
Route::get('Entidades/Editar/{id}', 'EntidadController@edit')->name('enti_editar');
Route::put('Entidades/actualizar/{id}', 'EntidadController@update')->name('enti_actualizar');
Route::delete('Entidades/eliminar/{id}', 'EntidadController@destroy')->name('enti_eliminar');

// CONTROL ESTUDIANTIL
// CARRERA
Route::get('Carreras', 'CarreraController@index')->name('carrera');
Route::get('Carreras/Registrar', 'CarreraController@create')->name('carrera_create');
Route::post('Carreras/Crear', 'CarreraController@store')->name('carrera_guardar');
Route::get('Carreras/editar/{id}', 'CarreraController@edit')->name('carrera_editar');
Route::put('Carreras/actualizar/{id}', 'CarreraController@update')->name('carrera_actualizar');
Route::delete('Carreras/eliminar/{id}', 'CarreraController@destroy')->name('carrera_eliminar');

// Grupos
Route::get('Grupo', 'GrupoController@index')->name('grupo');
Route::get('Grupo/Registrar', 'GrupoController@create')->name('grupo_create');
Route::post('Grupo/Crear', 'GrupoController@store')->name('grupo_guardar');
Route::get('Grupo/editar{id}', 'GrupoController@edit')->name('grupo_editar');
Route::put('Grupo/actualizar/{id}', 'GrupoController@update')->name('grupo_actualizar');
Route::delete('}carreras/eliminar/{id}', 'GrupoController@destroy')->name('grupo_eliminar');

// Alumnos
Route::get('Alumnos', 'AlumnosController@index')->name('alumnos');
Route::get('Alumnos/Registrar', 'AlumnosController@create')->name('alumnos_create');
Route::post('Alumnos/crear', 'AlumnosController@store')->name('alumnos_guardar');
Route::get('Alumnos/ver/{id}', 'AlumnosController@show')->name('alumnos_ver');
Route::get('Alumnos/editar/{id}', 'AlumnosController@edit')->name('alumnos_editar');
Route::put('Alumnos/actualizar/{id}', 'AlumnosController@update')->name('alumnos_actualizar');
Route::delete('Alumnos/eliminar/{id}', 'AlumnosController@destroy')->name('alumnos_eliminar');