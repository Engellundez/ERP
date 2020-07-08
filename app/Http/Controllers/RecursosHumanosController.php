<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
use App\Universidad;
use App\Departamento;
use App\puesto;
use App\UniversidadDepartamentoPuesto;
use App\RecursosHumanos;

class RecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RH = RecursosHumanos::orderBy('nombre','ASC')->paginate(5);
        return view('rhView', compact('RH'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uni = Universidad::orderBy('nombre', 'ASC')->get();
        $pues = puesto::orderBy('nombre', 'ASC')->get();
        $udp = UniversidadDepartamentoPuesto::orderBy('id', 'DESC')->first('id');
        $udp = $udp->id + 1;
        return view('rhcreate', compact('uni','pues','udp'));
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
            'universidad_departamento_puesto_id'    => 'required',
            'universidad_id'                        => 'required',
            'puesto_id'                             => 'required',
            'presupuesto'                           => 'required',
            'nombre'                                => 'required',
            'apellido_paterno'                      => 'required',
            'apellido_materno'                      => 'required',
            'fecha_nacimiento'                      => 'required',
            'email'                                 => 'required',
            'direccion'                             => 'required',
            'colonia'                               => 'required',
            'telefono'                              => 'required',
        ]);
        
        $nuevoUniDepaPues = new UniversidadDepartamentoPuesto;
        $nuevoUniDepaPues->universidad_id   = $request->universidad_id;
        $nuevoUniDepaPues->puesto_id        = $request->puesto_id;
        $nuevoUniDepaPues->save();

        $nuevoRH = new RecursosHumanos;
        $nuevoRH->presupuesto                           = $request->presupuesto;
        $nuevoRH->nombre                                = $request->nombre;
        $nuevoRH->apellido_paterno                      = $request->apellido_paterno;
        $nuevoRH->apellido_materno                      = $request->apellido_materno;
        $nuevoRH->fecha_nacimiento                      = $request->fecha_nacimiento;
        $nuevoRH->email                                 = $request->email;
        $nuevoRH->direccion                             = $request->direccion;
        $nuevoRH->telefono                              = $request->telefono;
        $nuevoRH->colonia                               = $request->colonia;
        $nuevoRH->universidad_departamento_puesto_id    = $request->universidad_departamento_puesto_id;
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
        $uni = Universidad::orderBy('nombre', 'ASC')->get();
        $pues = puesto::orderBy('nombre', 'ASC')->get();
        $unidepapues = UniversidadDepartamentoPuesto::all();

        return view('rheditar', compact('rh','uni','pues','unidepapues'));
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
            'universidad_departamento_puesto_id'    => 'required',
            'universidad_id'                        => 'required',
            'puesto_id'                             => 'required',
            'presupuesto'                           => 'required',
            'nombre'                                => 'required',
            'apellido_paterno'                      => 'required',
            'apellido_materno'                      => 'required',
            'fecha_nacimiento'                      => 'required',
            'email'                                 => 'required',
            'direccion'                             => 'required',
            'colonia'                               => 'required',
            'telefono'                              => 'required',
        ]);

        $udpupdate = UniversidadDepartamentoPuesto::findOrFail($request->universidad_departamento_puesto_id);
        $udpupdate->universidad_id  = $request->universidad_id;
        $udpupdate->puesto_id       = $request->puesto_id;
        $udpupdate->save();

        $rhactualizar = RecursosHumanos::findOrFail($id);
        $rhactualizar->presupuesto                          = $request->presupuesto;
        $rhactualizar->nombre                               = $request->nombre;
        $rhactualizar->apellido_paterno                     = $request->apellido_paterno;
        $rhactualizar->apellido_materno                     = $request->apellido_materno;
        $rhactualizar->fecha_nacimiento                     = $request->fecha_nacimiento;
        $rhactualizar->email                                = $request->email;
        $rhactualizar->direccion                            = $request->direccion;
        $rhactualizar->colonia                              = $request->colonia;
        $rhactualizar->telefono                             = $request->telefono;
        $rhactualizar->universidad_departamento_puesto_id   = $request->universidad_departamento_puesto_id;
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
