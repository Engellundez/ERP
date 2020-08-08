<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rolpermiso;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('permissions')->orderBy('name', 'ASC')->paginate(5);
        return view('Roles.rolesview', compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::orderBy('id', 'ASC')->get();
        $roles = Role::orderBy('id', 'DESC')->first();
        $rol = $roles->id + 1;
        return view('Roles.rolescrear', compact('permissions','rol'));
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
            'permissions'   => 'required|array',
            'rol_id'        => 'required',
        ]);

        $newRol = new Role;
        $newRol->id             = $request->rol_id;
        $newRol->name           = $request->name;
        $newRol->guard_name     = 'web';
        $newRol->description    = $request->description;
        $newRol->save();

        $role = Role::findOrFail($request->rol_id);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles')->with('info', 'El rol y sus permisos han sido creados');
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
        $rol = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::get();
        return view('Roles.roleseditar', compact('rol','permissions'));
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
            'permissions'   => 'required|array',
        ]);

        // actualizar Rol
        $rolupdate = Role::findOrFail($id);
        $rolupdate->name = $request->name;
        $rolupdate->description = $request->description;
        $rolupdate->save();

        $rolpermi = rolpermiso::where('role_id', $id);
        $rolpermi->delete();

        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permissions);

        return back()->with('mensaje', 'El rol y sus permisos han sido actualizados');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Role::findOrFail($id);
        $rol->delete();

        return back()->with('mensaje', 'El rol ha sido Eliminado');
    }
}
