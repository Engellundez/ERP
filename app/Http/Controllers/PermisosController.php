<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rolpermiso;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permission::orderBy('name', 'ASC')->paginate(5);
        return view('Permisos.permisosview', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Permisos.permisoscrear');
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
            'name'          => 'required',
            'description'   => 'required',
        ]);

        $newpermiso = new Permission;
        $newpermiso->name       = $request->name;
        $newpermiso->guard_name = 'web';
        $newpermiso->description= $request->description;
        $newpermiso->save();

        return redirect()->route('permisos')->with('info', 'El permiso se ha creado');
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
        $permiso = Permission::findOrFail($id);
        return view('Permisos.permisoseditar', compact('permiso'));
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
            'name'          => 'required',
            'description'   => 'required',
        ]);

        $permisoupdate = Permission::findOrFail($id);
        $permisoupdate->name            = $request->name;
        $permisoupdate->description     = $request->description;
        $permisoupdate->save();

        return back()->with('mensaje', 'El permiso ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permission::findOrFail($id);
        $permiso->delete();

        return back()->with('mensaje', 'El permiso ha sido Eliminado');
    }
}
