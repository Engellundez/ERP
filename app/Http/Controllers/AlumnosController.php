<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Universidad;
use App\Grupos;
use App\AsignaturaAlumno;
use App\Alumnos;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $al = Alumnos::orderBy('nombre', 'ASC')->paginate(5);
        return view('CEstudiantil.Alumnos.AlView', compact('al'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uni = Universidad::orderBy('nombre', 'ASC')->get();
        $gru = Grupos::orderBy('semestre', 'ASC')->get();
        
        return view('CEstudiantil.Alumnos.alcreate', compact('uni','gru','asialu'));
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
            'nombre'            => 'required',
            'primer_apellido'   => 'required',
            'segundo_apellido'  => 'required',
            'fecha_nacimiento'  => 'required',
            'grupo_id'          => 'required',
            'universidad_id'    => 'required',
            'correo'            => 'required',
        ]);

        $nuevoAlumno = new Alumnos;
        $nuevoAlumno->nombre            = $request->nombre;
        $nuevoAlumno->primer_apellido   = $request->primer_apellido;
        $nuevoAlumno->segundo_apellido  = $request->segundo_apellido;
        $nuevoAlumno->fecha_nacimiento  = $request->fecha_nacimiento;
        $nuevoAlumno->grupo_id          = $request->grupo_id;
        $nuevoAlumno->universidad_id    = $request->universidad_id;
        $nuevoAlumno->correo            = $request->correo;
        $nuevoAlumno->save();

        return back()->with('mensaje', 'El nuevo alumno se Guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alu = Alumnos::findOrFail($id);
        $cal = AsignaturaAlumno::orderBy('alumno_id', 'ASC')->where('alumno_id', $id)->get();

        return view('CEstudiantil.Alumnos.alver', compact('alu','cal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uni = Universidad::orderBy('nombre', 'ASC')->get();
        $gru = Grupos::orderBy('semestre', 'ASC')->get();
        $alu = Alumnos::findOrFail($id);
        
        return view('CEstudiantil.Alumnos.aleditar', compact('alu','uni','gru'));
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
            'nombre'            => 'required',
            'primer_apellido'   => 'required',
            'segundo_apellido'  => 'required',
            'fecha_nacimiento'  => 'required',
            'grupo_id'          => 'required',
            'universidad_id'    => 'required',
            'correo'            => 'required',
        ]);

        $nuevoAlumno = Alumnos::findOrFail($id);
        $nuevoAlumno->nombre            = $request->nombre;
        $nuevoAlumno->primer_apellido   = $request->primer_apellido;
        $nuevoAlumno->segundo_apellido  = $request->segundo_apellido;
        $nuevoAlumno->fecha_nacimiento  = $request->fecha_nacimiento;
        $nuevoAlumno->grupo_id          = $request->grupo_id;
        $nuevoAlumno->universidad_id    = $request->universidad_id;
        $nuevoAlumno->correo            = $request->correo;
        $nuevoAlumno->save();

        return back()->with('mensaje', 'El alumno se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alueliminar = Alumnos::findOrFail($id);
        $alueliminar->delete();

        return back()->with('mensaje', 'Alumno borrado correctamente');
    }
}
