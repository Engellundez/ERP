<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
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
        $uni = Universidad::orderBy('nombre', 'ASC')->paginate(5);
        return view('Universidad.uniView', compact('uni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enti = Entidad::all();
        return view('Universidad.unicreate', compact('enti'));
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
            'entidad_id'=>'required',
            'ciudad'    =>'required',
        ]);

        $nuevaUni = new Universidad;
        $nuevaUni->nombre       = $request->nombre;
        $nuevaUni->entidad_id   = $request->entidad_id;
        $nuevaUni->ciudad       = $request->ciudad;
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
        $enti = Entidad::all();
        $uni = Universidad::findOrFail($id);
        return view('Universidad.unieditar', compact('uni','enti'));
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
            'entidad_id'=> 'required',
            'ciudad'    => 'required',
        ]);

        $uniactualizar = Universidad::findOrFail($id);
        $uniactualizar->nombre  = $request->nombre;
        $uniactualizar->entidad_id  = $request->entidad_id;
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
