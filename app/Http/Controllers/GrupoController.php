<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupos;
use App\Carreras;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gru = Grupos::orderBy('semestre', 'ASC')->paginate(5);
        return view('CEstudiantil.Grupos.GruView', compact('gru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = Carreras::orderBy('nombre', 'ASC')->get();
        return view('CEstudiantil.Grupos.Grucreate', compact('car'));
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
            'semestre'      => 'required',
            'carrera_id'    => 'required',
        ]);

        $nuevoGrupo = new Grupos;
        $nuevoGrupo->semestre = $request->semestre;
        $nuevoGrupo->carrera_id = $request->carrera_id;
        $nuevoGrupo->save();

        return back()->with('mensaje', 'El nuevo Grupo se Creo Correctamente');
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
        $gru = Grupos::findOrFail($id);
        $car = Carreras::orderBy('nombre', 'ASC')->get();

        return view('CEstudiantil.Grupos.Grueditar', compact('gru','car'));
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
            'semestre'      => 'required',
            'carrera_id'    => 'required',
        ]);

        $actualizarGrupo = Grupos::findOrFail($id);
        $actualizarGrupo->semestre = $request->semestre;
        $actualizarGrupo->carrera_id = $request->carrera_id;
        $actualizarGrupo->save();

        return back()->with('mensaje', 'El nuevo Grupo se Actualizo Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grueliminar = Grupos::findOrFail($id);
        $grueliminar->delete();

        return back()->with('mensaje', 'Grupo eliminado correctamente');
    }
}
