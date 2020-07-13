<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre'            => 'Dennis',
            'primer_apellido'   => 'Sedano',
            'segundo_apellido'  => 'Soto',
            'fecha_nacimiento'  => '1997/10/11',
            'grupo_id'          => '9',
            'universidad_id'    => '1',
            'correo'            => 'denis_soto@gmail.com',
        ]);
        DB::table('alumnos')->insert([
            'nombre'            => 'Jose Alejandro',
            'primer_apellido'   => 'Peña',
            'segundo_apellido'  => 'Tozcano',
            'fecha_nacimiento'  => '1996/04/23',
            'grupo_id'          => '9',
            'universidad_id'    => '1',
            'correo'            => 'alex_tozcano@gmail.com',
        ]);
        DB::table('alumnos')->insert([
            'nombre'            => 'Mauricio',
            'primer_apellido'   => 'Villanuevo',
            'segundo_apellido'  => 'Olarra',
            'fecha_nacimiento'  => '1996/12/01',
            'grupo_id'          => '9',
            'universidad_id'    => '1',
            'correo'            => 'hippos_corner@gmail.com',
        ]);
        DB::table('alumnos')->insert([
            'nombre'            => 'Jesus',
            'primer_apellido'   => 'Ferreira',
            'segundo_apellido'  => 'Ramos',
            'fecha_nacimiento'  => '1995/12/23',
            'grupo_id'          => '9',
            'universidad_id'    => '1',
            'correo'            => 'Jesus_ferrari@gmail.com',
        ]);
    }
}
