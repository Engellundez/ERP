<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //CREAR roles y permisos y modificarlos
            // crear
            // Role::create(['name'=>'invitado']);
            // Permission::create(['name'=>'guest']);

            // Asignar Permisos a un rol Forma 1
            // $role = Role::findById(1);
            // $permission = Permission::findById(2);
            // $role->givePermissionTo($permission);
            // or
            // $permission->assignRole($role);

            // Sync poner todos de un putazo Forma 1
            // $role = Role::findById(1);
            // $permissions = Permission::get();
            // $role->syncPermissions($permissions);

            // Sync poner todos de un putazo Forma 2 
            // $roles = Role::get();
            // $permission = Permission::findById(1);
            // $permission->syncRoles($roles);

            // Quitar permisos
            // $permission = Permission::findById(3);
            // $role = Role::findById(1);
            // $role->revokePermissionTo($permission);
            // or
            // $permission->removeRole($role);

        // Conectar usuarios con roles y permisos
            // auth()->user()->givePermissionTo('all-access'); //Asigna permos a un usuario
            // auth()->user()->AssignRole('admin'); // Asigna roles a un usuario

        // Ver permisos de un usuario logueado
            // return auth()->user()->permissions; //Ver permisos del usuario autentificado
            // return auth()->user()->getRoleNames();  //Ver roles de usuario autentificado
        
        // ver roles de un usuario
            // $user = User::findOrFail(1);
            // $roles = $user->getRoleNames();
            // return $roles;

        //ver permisos de un usuario 
            // $user = User::findOrFail(1);
            // $permissions = $user->getAllPermissions();
            // return $permissions;

        // 

        return view('welcome');
    }
}
