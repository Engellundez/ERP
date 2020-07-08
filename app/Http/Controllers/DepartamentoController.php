<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Universidad;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depa = Departamento::orderBy('nombre','ASC')->paginate(5);
        return view('Departamento.depaView', compact('depa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Departamento.depacreate');
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

        $nuevodepa = new Departamento;
        $nuevodepa->nombre = $request->nombre;
        $nuevodepa->save();

        return back()->with('mensaje', 'El departamento se agrego correctamente');
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
        $depa = Departamento::findOrFail($id);
        return view('Departamento.depaeditar', compact('depa'));
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

        $depaactualizar = Departamento::findOrFail($id);
        $depaactualizar->nombre = $request->nombre;
        $depaactualizar->save();

        return back()->with('mensaje', 'El Departamento a sido Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depaeliminar = Departamento::findOrFail($id);
        $depaeliminar->delete();

        return back()->with('mensaje', 'El Departamento ha sido elimindo');
    }
}
