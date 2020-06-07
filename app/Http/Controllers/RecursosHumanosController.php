<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
use App\Departamento;
use App\puesto;
use App\RecursosHumanos;
use App\Universidad;

class RecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RH = RecursosHumanos::all();
        return view('rhView', compact('RH'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enti = Entidad::all();
        $uni = Universidad::all();
        $pues = puesto::all();
        $dep = Departamento::all();
        return view('rhcreate', compact('enti','uni','pues','dep'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'entidad_id'        => 'required',
            'universidad_id'    => 'required',
            'departamento_id'   => 'required',
            'puesto_id'         => 'required',
            'presupuesto'       => 'required',
            'nombre'            => 'required',
            'apellido_paterno'  => 'required',
            'apellido_materno'  => 'required',
            'fecha_nacimiento'  => 'required',
            'email'             => 'required',
            'direccion'         => 'required',
            'colonia'           => 'required',
            'telefono'          => 'required',
        ]);
        
        $nuevoRH = new RecursosHumanos;
        $nuevoRH->entidad_id        = $request->entidad_id;
        $nuevoRH->universidad_id    = $request->universidad_id;
        $nuevoRH->departamento_id   = $request->departamento_id;
        $nuevoRH->puesto_id         = $request->puesto_id;
        $nuevoRH->presupuesto       = $request->presupuesto;
        $nuevoRH->nombre            = $request->nombre;
        $nuevoRH->apellido_paterno  = $request->apellido_paterno;
        $nuevoRH->apellido_materno  = $request->apellido_materno;
        $nuevoRH->fecha_nacimiento  = $request->fecha_nacimiento;
        $nuevoRH->email             = $request->email;
        $nuevoRH->direccion         = $request->direccion;
        $nuevoRH->colonia           = $request->colonia;
        $nuevoRH->telefono          = $request->telefono;
        $nuevoRH->save();

        return back()->with('mensaje', '¡Usuario Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rh = RecursosHumanos::findOrFail($id);        
        $enti = Entidad::all();
        $uni = Universidad::all();
        $pues = puesto::all();
        $dep = Departamento::all();

        return view('rheditar', compact('rh','enti','uni','pues','dep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'entidad_id'        => 'required',
            'universidad_id'    => 'required',
            'departamento_id'   => 'required',
            'puesto_id'         => 'required',
            'presupuesto'       => 'required',
            'nombre'            => 'required',
            'apellido_paterno'  => 'required',
            'apellido_materno'  => 'required',
            'fecha_nacimiento'  => 'required',
            'email'             => 'required',
            'direccion'         => 'required',
            'colonia'           => 'required',
            'telefono'          => 'required',
        ]);

        $rhactualizar = RecursosHumanos::findOrFail($id);
        $rhactualizar->entidad_id        = $request->entidad_id;
        $rhactualizar->universidad_id    = $request->universidad_id;
        $rhactualizar->departamento_id   = $request->departamento_id;
        $rhactualizar->puesto_id         = $request->puesto_id;
        $rhactualizar->presupuesto       = $request->presupuesto;
        $rhactualizar->nombre            = $request->nombre;
        $rhactualizar->apellido_paterno  = $request->apellido_paterno;
        $rhactualizar->apellido_materno  = $request->apellido_materno;
        $rhactualizar->fecha_nacimiento  = $request->fecha_nacimiento;
        $rhactualizar->email             = $request->email;
        $rhactualizar->direccion         = $request->direccion;
        $rhactualizar->colonia           = $request->colonia;
        $rhactualizar->telefono          = $request->telefono;
        $rhactualizar->save();

        return back()->with('mensaje', 'Personal Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rheliminar = RecursosHumanos::findOrFail($id);
        $rheliminar->delete();
        
        return back()->with('mensaje', 'Personal Eliminado');
    }
}
