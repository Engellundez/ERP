<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
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
        $pues = Puesto::orderBy('nombre', 'ASC')->paginate(5);
        return view('Puesto.puesView', compact('pues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depa = Departamento::orderBy('nombre', 'ASC')->get();
        return view('Puesto.puescreate', compact('depa'));
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
            'departamento_id'   => 'required',
            'nombre'            => 'required',
        ]);

        $nuevopues = new Puesto;
        $nuevopues->departamento_id = $request->departamento_id;
        $nuevopues->nombre          = $request->nombre;
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
        $depa = Departamento::orderBy('nombre', 'ASC')->get();
        $pues = Puesto::findOrFail($id);
        return view('Puesto.pueseditar', compact('pues','depa'));
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
            'departamento_id'   => 'required',
            'nombre'            => 'required',
        ]);

        $puesactualizar = Puesto::findOrFail($id);
        $puesactualizar->departamento_id = $request->departamento_id;
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
