<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\model_has_role;
use App\model_has_pesrmission;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['roles', 'permissions'])->orderBy('name', 'ASC')->paginate(5);
        return view('Users.usersview', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $users = User::orderBy('id', 'DESC')->first();
        $user = $users->id + 1;
        return view('Users.userscrear', compact('roles','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verificacion de los datos
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
            'roles'     => 'required|array',
            'id_user'   => 'required',
        ]);

        $newUser = new User;
        $newUser->id        = $request->id_user;
        $newUser->name      = $request->name;
        $newUser->email     = $request->email;
        $newUser->password  = Hash::make($request->password);
        $newUser->save();

        $user = User::findOrFail($request->id_user);
        $user->AssignRole($request->roles);

        return redirect()->route('users')->with('info', 'El Usuario y Sus Roles han sido creados');
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
        $user = User::with('roles:id,name,description')->findOrFail($id);
        $roles = Role::get();
        return view('Users.userseditar', compact('user', 'roles'));
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
        // Verificacion de los datos
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'roles' => 'required|array',
        ]);
        //actualizar el usuario
        $userupdate = User::findOrFail($id);
        $userupdate->name = $request->name;
        $userupdate->email = $request->email;
        $userupdate->save();

        // actualizar Roles
        $modelo = model_has_role::where('model_id', $id);
        $modelo->delete();

        $user = User::findOrFail($id);
        $user->AssignRole($request->roles); // Asigna roles a un usuario

        return back()->with('mensaje', 'El Usuario y sus roles se han actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return back()->with('mensaje', 'El usuario ha sido eliminado');
    }

    public function permisocreate($id)
    {
        $user = User::with('permissions:id,name,description')->findOrFail($id);
        $permisos = Permission::get();
        return view('Users.userspermiso', compact('user', 'permisos'));
    }

    public function permisoupdate(Request $request, $id)
    {
        $request->validate([
            'permisos'  => 'required|array',
        ]);
        // actualizar los permisos
        // $modelopermiso = model_has_pesrmission::where('model_id', $id);
        // $modelopermiso->delete();

        $user = User::findOrFail($id);
        $user->syncPermissions($request->permisos);
        return back()->with('mensaje', 'El usuario ha sido actualizado con nuevos permisos');
    }
}
