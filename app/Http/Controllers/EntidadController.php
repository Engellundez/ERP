<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enti = Entidad::orderBy('nombre', 'ASC')->paginate(5);
        return view('Entidad.entiView', compact('enti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Entidad.enticreate');
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
            'nombre'=>'required',
        ]);

        $nuevaEnti = new Entidad;
        $nuevaEnti->nombre = $request->nombre;
        $nuevaEnti->save();

        return back()->with('mensaje', 'La Entidad se agrego correctamente');
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
        $enti = Entidad::findOrFail($id);
        return view('Entidad.entieditar', compact('enti'));
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
            'nombre'=>'required',
        ]);

        $entiactualizar = Entidad::findOrFail($id);
        $entiactualizar->nombre = $request->nombre;
        $entiactualizar->save();

        return back()->with('mensaje', 'La Entidad a sido actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entieliminar = Entidad::findOrFail($id);
        $entieliminar->delete();

        return back()->with('mensaje', 'La entidad ha sido eliminada');
    }
}
