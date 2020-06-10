<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puesto;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pues = Puesto::paginate(5);
        return view('Puesto.puesView', compact('pues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Puesto.puescreate');
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

        $nuevopues = new Puesto;
        $nuevopues->nombre = $request->nombre;
        $nuevopues->save();

        return back()->with('mensaje', 'El Puesto se agrego correctamente');
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
        $pues = Puesto::findOrFail($id);
        return view('Puesto.pueseditar', compact('pues'));
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

        $puesactualizar = Puesto::findOrFail($id);
        $puesactualizar->nombre = $request->nombre;
        $puesactualizar->save();

        return back()->with('mensaje', 'El Puesto a sido Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pueseliminar = Puesto::findOrFail($id);
        $pueseliminar->delete();

        return back()->with('mensaje', 'El Puesto ha sido elimindo');
    }
}
