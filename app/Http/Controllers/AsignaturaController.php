<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecursosHumanos;
use App\Asignatura;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignatura = Asignatura::orderBy('nombre', 'ASC')->paginate(5);

        return view('CEstudiantil.Asignatura.Asiview', compact('asignatura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recursoshumanos = RecursosHumanos::orderBy('nombre', 'ASC')->get();

        return view('CEstudiantil.Asignatura.Asicreate', compact('recursoshumanos'));
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
            'recursos_humanos_id'   => 'required',
            'nombre'                => 'required',
            'semestre'              => 'required',
            'inicio_clase'          => 'required',
            'fin_clase'             => 'required',
            'dias_imparticion'      => 'required',
        ]);

        $nuevaMateria = new Asignatura;
        $nuevaMateria->recursos_humanos_id  = $request->recursos_humanos_id;
        $nuevaMateria->nombre               = $request->nombre;
        $nuevaMateria->semestre             = $request->semestre;
        $nuevaMateria->inicio_clase         = $request->inicio_clase;
        $nuevaMateria->fin_clase            = $request->fin_clase;
        $nuevaMateria->dias_imparticion     = $request->dias_imparticion;
        $nuevaMateria->save();

        return back()->with('mensaje', 'La Nueva Materia se ha agregado');
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
        $recursoshumanos = RecursosHumanos::orderBy('nombre', 'ASC')->get();
        $asignatura = Asignatura::findOrFail($id);

        return view('CEstudiantil.Asignatura.Asieditar', compact('recursoshumanos', 'asignatura'));
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
            'recursos_humanos_id'   => 'required',
            'nombre'                => 'required',
            'semestre'              => 'required',
            'inicio_clase'          => 'required',
            'fin_clase'             => 'required',
            'dias_imparticion'      => 'required',
        ]);

        $nuevaMateria = Asignatura::findOrFail($id);
        $nuevaMateria->recursos_humanos_id  = $request->recursos_humanos_id;
        $nuevaMateria->nombre               = $request->nombre;
        $nuevaMateria->semestre             = $request->semestre;
        $nuevaMateria->inicio_clase         = $request->inicio_clase;
        $nuevaMateria->fin_clase            = $request->fin_clase;
        $nuevaMateria->dias_imparticion     = $request->dias_imparticion;
        $nuevaMateria->save();

        return back()->with('mensaje', 'La Materia se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiaeliminar = Asignatura::findOrFail($id);
        $materiaeliminar->delete();

        return back()->with('mensaje', 'Se ha eliminado correctamente la asignatura');
    }
}
