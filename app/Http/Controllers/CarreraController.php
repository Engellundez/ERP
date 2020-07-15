<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carreras;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Car = Carreras::orderBy('nombre', 'ASC')->paginate(5);
        return view('CEstudiantil.Carrera.CarView', compact('Car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CEstudiantil.Carrera.Carcreate');
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
            'nombre' => 'required',
        ]);

        $nuevaCarrera = new Carreras;
        $nuevaCarrera->nombre = $request->nombre;
        $nuevaCarrera->save();

        return back()->with('mensaje', 'La Carrera se añadio Correctamente');
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
        $Car = Carreras::findOrFail($id);

        return view('CEstudiantil.Carrera.Careditar', compact('Car'));
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
            'nombre' => 'required',
        ]);

        $actualizarCar = Carreras::findOrFail($id);
        $actualizarCar->nombre = $request->nombre;
        $actualizarCar->save();

        return back()->with('mensaje', 'La carrera se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $careliminar = Carreras::findOrFail($id);
        $careliminar->delete();

        return back()->with('mensaje', 'Carrera Eliminada');
    }
}
