<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsignaturaAlumno;
use App\Calificacion;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones = Calificacion::orderBy('id', 'ASC')->paginate(5);

        return view('CEstudiantil.Calificaciones.Calview', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $asigalum = AsignaturaAlumno::orderBy('id', 'ASC')->get();
        $cal = Calificacion::findOrFail($id);

        return view('CEstudiantil.Calificaciones.Caleditar', compact('asigalum', 'cal'));
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
            'parcial1'              => 'nullable|max:2|min:0',
            'parcial2'              => 'nullable|max:2|min:0',
            'parcial3'              => 'nullable|max:2|min:0',
        ]);

        $calificactualizar = Calificacion::findOrFail($id);
        $calificactualizar->parcial1            = $request->parcial1;
        $calificactualizar->parcial2            = $request->parcial2;
        $calificactualizar->parcial3            = $request->parcial3;

        if($request->parcial1 !=NULL && $request->parcial2 !=NULL && $request->parcial3 !=NULL){
            $calfinal = (($request->parcial1 * 0.3) + ($request->parcial2 * 0.3) + ($request->parcial3 * 0.4));
        }else{
            $calfinal = NULL;
        }
        $calificactualizar->calificacion_final  = $calfinal;
        $calificactualizar->save();

        return back()->with('mensaje','Las Calificaciones se han actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
}
