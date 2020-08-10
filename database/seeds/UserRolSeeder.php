<?php

use Illuminate\Database\Seeder;

class UserRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // USERS
        DB::table('users')->insert([
            'name' => 'Angel David Escutia Lundez',
            'email' => 'angel@hotmail.com',
            'password' => Hash::make('123456789D'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mauricio Domigez Gonzales',
            'email' => 'mau@hotmail.com',
            'password' => Hash::make('123456789D'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mario Sanchez Raya',
            'email' => 'mario@hotmail.com',
            'password' => Hash::make('123456789D'),
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos Porras Lopez',
            'email' => 'porras@hotmail.com',
            'password' => Hash::make('123456789D'),
        ]);

        // ROLS
        DB::table('roles')->insert([
            'name'          => 'super-usuario',
            'guard_name'    => 'web',
            'description'   => 'El Super Usuario tiene el poder de hacer lo que le plasca y entrar a donde quiera',
        ]);
        DB::table('roles')->insert([
            'name'          => 'admin',
            'guard_name'    => 'web',
            'description'   => 'El Admin puede hacer la mayor cantidad de cosas excepot registrar usuarios',
        ]);
        DB::table('roles')->insert([
            'name'          => 'invitado',
            'guard_name'    => 'web',
            'description'   => 'El Invitado solo puede ver las tablas sin poder modificarlas agregar o eliminar',
        ]);
        DB::table('roles')->insert([
            'name'          => 'vetado',
            'guard_name'    => 'web',
            'description'   => 'No tiene ningun acceso al sistema',
        ]);

        // Permisos
        DB::table('permissions')->insert([
            'name'          => 'Completo',
            'guard_name'    => 'web',
            'description'   => 'Accesso completo',
        ]);
        DB::table('permissions')->insert([
            'name'          => 'Normal',
            'guard_name'    => 'web',
            'description'   => 'Accesso Normal',
        ]);
        DB::table('permissions')->insert([
            'name'          => 'invitado',
            'guard_name'    => 'web',
            'description'   => 'Invitado',
        ]);
        DB::table('permissions')->insert([
            'name'          => 'Sin-Acceso',
            'guard_name'    => 'web',
            'description'   => 'No puede hacer nada',
        ]);

        // roles con permisos
        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id'       => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id'       => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id'       => '1',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id'       => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id'       => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id'       => '3',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '4',
            'role_id'       => '4',
        ]);

        // roles de usuarios
        DB::table('model_has_roles')->insert([
            'role_id'       => '1',
            'model_type'    => 'App\User',
            'model_id'      => '1'
        ]);
        DB::table('model_has_roles')->insert([
            'role_id'       => '3',
            'model_type'    => 'App\User',
            'model_id'      => '2'
        ]);
        DB::table('model_has_roles')->insert([
            'role_id'       => '2',
            'model_type'    => 'App\User',
            'model_id'      => '3'
        ]);
        DB::table('model_has_roles')->insert([
            'role_id'       => '4',
            'model_type'    => 'App\User',
            'model_id'      => '4'
        ]);

        // permisos Especiales de Usuario
        DB::table('model_has_permissions')->insert([
            'permission_id' => '3',
            'model_type'    => 'App\User',
            'model_id'      => '2'
        ]);
    }
}
