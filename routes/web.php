<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

    // RECURSOS HUMANOS
    Route::get('/RH', 'RecursosHumanosController@index')                    ->name('rh')            ->middleware('role:super-usuario|admin|invitado');
    Route::get('/RH/Registrar', 'RecursosHumanosController@create')         ->name('rh_create')     ->middleware('role:super-usuario|admin');
    Route::post('/RH/Crear', 'RecursosHumanosController@store')             ->name('rh_guardar')    ->middleware('role:super-usuario|admin');
    Route::get('/RH/Editar/{id}', 'RecursosHumanosController@edit')         ->name('rh_editar')     ->middleware('role:super-usuario|admin');
    Route::put('/RH/actualizar/{id}', 'RecursosHumanosController@update')   ->name('rhactualizar')  ->middleware('role:super-usuario|admin');
    Route::delete('/RH/eliminar/{id}', 'RecursosHumanosController@destroy') ->name('rh_eliminar')   ->middleware('role:super-usuario|admin');

    // UNIVERSIDAD
    Route::get('Universidad', 'UniversidadController@index')                    ->name('uni')           ->middleware('role:super-usuario|admin|invitado');
    Route::get('Universidad/Registrar', 'UniversidadController@create')         ->name('uni_create')    ->middleware('role:super-usuario|admin');
    Route::post('Universidad/crear', 'UniversidadController@store')             ->name('uni_guardar')   ->middleware('role:super-usuario|admin');
    Route::get('Universidad/Editar/{id}', 'UniversidadController@edit')         ->name('uni_editar')    ->middleware('role:super-usuario|admin');
    Route::put('Universidad/actualizar/{id}', 'UniversidadController@update')   ->name('uni_actualizar')->middleware('role:super-usuario|admin');
    Route::delete('Universidad/eliminar/{id}', 'UniversidadController@destroy') ->name('uni_eliminar')  ->middleware('role:super-usuario|admin');
    
    // DEPARTAMENTOS
    Route::get('Departamento', 'DepartamentoController@index')                      ->name('depa')              ->middleware('role:super-usuario|admin|invitado');
    Route::get('Departamento/Registrar', 'DepartamentoController@create')           ->name('depa_create')       ->middleware('role:super-usuario|admin');
    Route::post('Departamento/crear', 'DepartamentoController@store')               ->name('depa_guardar')      ->middleware('role:super-usuario|admin');
    Route::get('Departamento/Editar/{id}', 'DepartamentoController@edit')           ->name('depa_editar')       ->middleware('role:super-usuario|admin');
    Route::put('Departamento/actualizar/{id}', 'DepartamentoController@update')     ->name('depa_actualizar')   ->middleware('role:super-usuario|admin');
    Route::delete('Departamento/eliminar/{id}', 'DepartamentoController@destroy')   ->name('depa_eliminar')     ->middleware('role:super-usuario|admin');
    
    // PUESTOS
    Route::get('Puesto', 'PuestoController@index')                      ->name('pues')              ->middleware('role:super-usuario|admin|invitado');
    Route::get('Puesto/Registrar', 'PuestoController@create')           ->name('pues_create')       ->middleware('role:super-usuario|admin');
    Route::post('Puesto/crear', 'PuestoController@store')               ->name('pues_guardar')      ->middleware('role:super-usuario|admin');
    Route::get('Puesto/Editar/{id}', 'PuestoController@edit')           ->name('pues_editar')       ->middleware('role:super-usuario|admin');
    Route::put('Puesto/actualizar/{id}', 'PuestoController@update')     ->name('pues_actualizar')   ->middleware('role:super-usuario|admin');
    Route::delete('Puesto/eliminar/{id}', 'PuestoController@destroy')   ->name('pues_eliminar')     ->middleware('role:super-usuario|admin');
    
    // ENTIDADES
    Route::get('Entidades', 'EntidadController@index')                      ->name('enti')              ->middleware('role:super-usuario|admin|invitado');
    Route::get('Entidades/Registrar', 'EntidadController@create')           ->name('enti_create')       ->middleware('role:super-usuario|admin');
    Route::post('Entidades/crear', 'EntidadController@store')               ->name('enti_guardar')      ->middleware('role:super-usuario|admin');
    Route::get('Entidades/Editar/{id}', 'EntidadController@edit')           ->name('enti_editar')       ->middleware('role:super-usuario|admin');
    Route::put('Entidades/actualizar/{id}', 'EntidadController@update')     ->name('enti_actualizar')   ->middleware('role:super-usuario|admin');
    Route::delete('Entidades/eliminar/{id}', 'EntidadController@destroy')   ->name('enti_eliminar')     ->middleware('role:super-usuario|admin');
    
    // CONTROL ESTUDIANTIL
    // CARRERA
    Route::get('Carreras', 'CarreraController@index')                   ->name('carrera')           ->middleware('role:super-usuario|admin|invitado');
    Route::get('Carreras/Registrar', 'CarreraController@create')        ->name('carrera_create')    ->middleware('role:super-usuario|admin');
    Route::post('Carreras/Crear', 'CarreraController@store')            ->name('carrera_guardar')   ->middleware('role:super-usuario|admin');
    Route::get('Carreras/editar/{id}', 'CarreraController@edit')        ->name('carrera_editar')    ->middleware('role:super-usuario|admin');
    Route::put('Carreras/actualizar/{id}', 'CarreraController@update')  ->name('carrera_actualizar')->middleware('role:super-usuario|admin');
    Route::delete('Carreras/eliminar/{id}', 'CarreraController@destroy')->name('carrera_eliminar')  ->middleware('role:super-usuario|admin');
    
    // Grupos
    Route::get('Grupo', 'GrupoController@index')                        ->name('grupo')             ->middleware('role:super-usuario|admin|invitado');
    Route::get('Grupo/Registrar', 'GrupoController@create')             ->name('grupo_create')      ->middleware('role:super-usuario|admin');
    Route::post('Grupo/Crear', 'GrupoController@store')                 ->name('grupo_guardar')     ->middleware('role:super-usuario|admin');
    Route::get('Grupo/editar{id}', 'GrupoController@edit')              ->name('grupo_editar')      ->middleware('role:super-usuario|admin');
    Route::put('Grupo/actualizar/{id}', 'GrupoController@update')       ->name('grupo_actualizar')  ->middleware('role:super-usuario|admin');
    Route::delete('}carreras/eliminar/{id}', 'GrupoController@destroy') ->name('grupo_eliminar')    ->middleware('role:super-usuario|admin');
    
    // Alumnos
    Route::get('Alumnos', 'AlumnosController@index')                    ->name('alumnos')           ->middleware('role:super-usuario|admin|invitado');
    Route::get('Alumnos/Registrar', 'AlumnosController@create')         ->name('alumnos_create')    ->middleware('role:super-usuario|admin');
    Route::post('Alumnos/crear', 'AlumnosController@store')             ->name('alumnos_guardar')   ->middleware('role:super-usuario|admin');
    Route::get('Alumnos/ver/{id}', 'AlumnosController@show')            ->name('alumnos_ver')       ->middleware('role:super-usuario|admin|invitado');
    Route::get('Alumnos/editar/{id}', 'AlumnosController@edit')         ->name('alumnos_editar')    ->middleware('role:super-usuario|admin');
    Route::put('Alumnos/actualizar/{id}', 'AlumnosController@update')   ->name('alumnos_actualizar')->middleware('role:super-usuario|admin');
    Route::delete('Alumnos/eliminar/{id}', 'AlumnosController@destroy') ->name('alumnos_eliminar')  ->middleware('role:super-usuario|admin');
    
    //vinculacion
    Route::get('Vinculacion', 'VinculacionController@index')                    ->name('vinculacion')           ->middleware('role:super-usuario|admin|invitado');
    Route::get('Vinculacion/Registrar', 'VinculacionController@create')         ->name('vinculacion_create')    ->middleware('role:super-usuario|admin');
    Route::post('Vinculacion/crear', 'VinculacionController@store')             ->name('vinculacion_guardar')   ->middleware('role:super-usuario|admin');
    Route::get('Vinculacion/editar/{id}', 'VinculacionController@edit')         ->name('vinculacion_editar')    ->middleware('role:super-usuario|admin');
    Route::put('Vinculacion/actualizar/{id}', 'VinculacionController@update')   ->name('vinculacion_actualizar')->middleware('role:super-usuario|admin');
    Route::delete('Vinculacion/eliminar/{id}', 'VinculacionController@destroy') ->name('vinculacion_eliminar')  ->middleware('role:super-usuario|admin');
    
    // Asignatura
    Route::get('Asignatura', 'AsignaturaController@index')                      ->name('asignatura')            ->middleware('role:super-usuario|admin|invitado');
    Route::get('Asignatura/registar', 'AsignaturaController@create')            ->name('asignatura_create')     ->middleware('role:super-usuario|admin');
    Route::post('Asignatura/crear', 'AsignaturaController@store')               ->name('asignatura_guardar')    ->middleware('role:super-usuario|admin');
    Route::get('Asignatura/editar/{id}', 'AsignaturaController@edit')           ->name('asignatura_editar')     ->middleware('role:super-usuario|admin');
    Route::put('Asignatura/actualizar/{id}', 'AsignaturaController@update')     ->name('asignatura_actualizar') ->middleware('role:super-usuario|admin');
    Route::delete('Asignatura/eliminar/{id}', 'AsignaturaController@destroy')   ->name('asignatura_eliminar')   ->middleware('role:super-usuario|admin');
    
    // calificaciones
    Route::get('Calificacion', 'CalificacionController@index')                  ->name('calificacion')              ->middleware('role:super-usuario|admin|invitado');
    Route::get('Calificacion/editar/{id}', 'CalificacionController@edit')       ->name('calificacion_editar')       ->middleware('role:super-usuario|admin');
    Route::put('Calificacion/actualizar/{id}', 'CalificacionController@update') ->name('calificacion_actualizar')   ->middleware('role:super-usuario|admin');

    // Roles
    Route::prefix('Roles')->name('roles')->group(function(){
        Route::get('/', 'RolesController@index')                    ->name('')              ->middleware('role:super-usuario|admin|invitado');
        Route::get('/registrar', 'RolesController@create')          ->name('_create')       ->middleware('role:super-usuario');
        Route::post('/crear', 'RolesController@store')              ->name('_guardar')      ->middleware('role:super-usuario');
        Route::get('/eidtar/{id}', 'RolesController@edit')          ->name('_editar')       ->middleware('role:super-usuario');
        Route::put('/actualizar/{id}', 'RolesController@update')    ->name('_actualizar')   ->middleware('role:super-usuario');
        Route::delete('/eliminar/{id}', 'RolesController@destroy')  ->name('_eliminar')     ->middleware('role:super-usuario');
    });
    

    // Usuarios
    Route::prefix('Usuarios')->name('users')->group(function(){
        Route::get('/', 'UsuariosController@index')                                 ->name('')                  ->middleware('role:super-usuario|admin|invitado');
        Route::get('/registrar', 'UsuariosController@create')                       ->name('_create')           ->middleware('role:super-usuario');
        Route::post('/crear', 'UsuariosController@store')                           ->name('_guardar')         ->middleware('role:super-usuario');
        Route::get('/editar/{id}', 'UsuariosController@edit')                       ->name('_editar')           ->middleware('role:super-usuario');
        Route::put('/actualizar/{id}', 'UsuariosController@update')                 ->name('_actualizar')       ->middleware('role:super-usuario');
        Route::delete('/eliminar/{id}', 'UsuariosController@destroy')               ->name('_eliminar')         ->middleware('role:super-usuario');

        Route::get('/permiso/crear/{id}', 'UsuariosController@permisocreate')       ->name('_crearp')           ->middleware('role:super-usuario');
        Route::put('/permiso/actualizar/{id}', 'UsuariosController@permisoupdate')  ->name('_actualizarp')       ->middleware('role:super-usuario');
    });
    

    // Permisos
    Route::prefix('Permisos')->name('permisos')->group(function(){
        Route::get('/', 'PermisosController@index')                     ->name('')              ->middleware('role:super-usuario|admin|invitado');
        Route::get('/registrar', 'PermisosController@create')           ->name('_create')       ->middleware('role:super-usuario');
        Route::post('/crear', 'PermisosController@store')               ->name('_guardar')      ->middleware('role:super-usuario');
        Route::get('/editar/{id}', 'PermisosController@edit')           ->name('_editar')       ->middleware('role:super-usuario');
        Route::put('/actualizar/{id}', 'PermisosController@update')     ->name('_actualizar')   ->middleware('role:super-usuario');
        Route::delete('/eliminar/{id}', 'PermisosController@destroy')   ->name('_eliminar')     ->middleware('role:super-usuario');
    });
});