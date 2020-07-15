<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\Asignatura;
use App\AsignaturaAlumno;
use App\Calificacion;

class VinculacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturaalumno = AsignaturaAlumno::orderBy('asignatura_id', 'ASC')->paginate(5);
        return view('CEstudiantil.Vinculacion.Vinview', compact('asignaturaalumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumnos::orderBy('nombre', 'ASC')->get();
        $asignaturas = Asignatura::orderBy('nombre', 'ASC')->get();
        $idasigalum = AsignaturaAlumno::orderBy('id', 'DESC')->first();
        $idaa = $idasigalum->id + 1;

        return view('CEstudiantil.Vinculacion.Vincreate', compact('alumnos','asignaturas','idaa'));
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
            'id'                    => 'required',
            'asignatura_id'         => 'required',
            'alumno_id'             => 'required',
            'alumno_asignatura_id'  => 'required',
        ]);

        $nuevaVinculacion = new AsignaturaAlumno;
        $nuevaVinculacion->id               = $request->id;
        $nuevaVinculacion->asignatura_id    = $request->asignatura_id;
        $nuevaVinculacion->alumno_id        = $request->alumno_id;
        $nuevaVinculacion->save();

        $CalificacionNueva = new Calificacion;
        $CalificacionNueva->alumno_asignatura_id    = $request->alumno_asignatura_id;
        $CalificacionNueva->parcial1                = NULL;
        $CalificacionNueva->parcial2                = NULL;
        $CalificacionNueva->parcial3                = NULL;
        $CalificacionNueva->calificacion_final      = NULL;
        $CalificacionNueva->save();

        return back()->with('mensaje', 'Se vinculo el alumno con su respectiva materia de forma adecuada');
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
        $alumnos = Alumnos::orderBy('nombre', 'ASC')->get();
        $asignaturas = Asignatura::orderBy('nombre', 'ASC')->get();
        $aa = AsignaturaAlumno::findOrFail($id);

        return view('CEstudiantil.Vinculacion.Vineditar', compact('alumnos','asignaturas','aa'));
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
            'asignatura_id' => 'required',
            'alumno_id'     => 'required',
        ]);

        $ActualizarVinculacion = AsignaturaAlumno::findOrFail($id);
        $ActualizarVinculacion->asignatura_id    = $request->asignatura_id;
        $ActualizarVinculacion->alumno_id        = $request->alumno_id;
        $ActualizarVinculacion->save();

        return back()->with('mensaje', 'Se edito la vinculacion de forma adecuada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aa = AsignaturaAlumno::findOrFail($id);
        $cal = $aa->id;
        $calificacion = Calificacion::findOrFail($cal);
        $calificacion->delete();
        $aa->delete();

        return back()->with('mensaje', 'Vinculacion Eliminada');
    }
}
