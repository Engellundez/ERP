<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universidad;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni = Universidad::all();
        return view('Universidad.uniView', compact('uni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Universidad.unicreate');
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
            'nombre'    =>'required',
            'ciudad'    =>'required',
        ]);

        $nuevaUni = new Universidad;
        $nuevaUni->nombre   = $request->nombre;
        $nuevaUni->ciudad   = $request->ciudad;
        $nuevaUni->save();

        return back()->with('mensaje', 'La Universidad a sido agregada correctamente');
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
        $uni = Universidad::findOrFail($id);
        return view('Universidad.unieditar', compact('uni'));
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
            'nombre'    => 'required',
            'ciudad'    => 'required',
        ]);

        $uniactualizar = Universidad::findOrFail($id);
        $uniactualizar->nombre  = $request->nombre;
        $uniactualizar->ciudad  = $request->ciudad;
        $uniactualizar->save();

        return back()->with('mensaje', 'La Universidad a sido Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unieliminar = Universidad::findOrFail($id);
        $unieliminar->delete();

        return back()->with('mensaje', 'La universidad a sido eliminada');
    }
}
