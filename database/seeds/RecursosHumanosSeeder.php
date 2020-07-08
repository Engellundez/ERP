<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursosHumanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recursos_humanos')->insert([
            'universidad_departamento_puesto_id' => '1',
            'presupuesto' => '10000',
            'nombre' => 'Angel David',
            'apellido_paterno' => 'Escutia',
            'apellido_materno' => 'Lundez',
            'fecha_nacimiento' => '1999-01-23',
            'email' => 'angel.lundez@hotmail.com',
            'direccion' => 'aramen #541',
            'telefono' => '4433867825',
            'colonia' => 'felix ireta',
        ]);
        DB::table('recursos_humanos')->insert([
            'universidad_departamento_puesto_id' => '2',
            'presupuesto' => '11000',
            'nombre' => 'Mario Alberto',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Raya',
            'fecha_nacimiento' => '1993-05-18',
            'email' => 'Mario_alsr@hotmail.com',
            'direccion' => 'morelia',
            'telefono' => '4431732550',
            'colonia' => 'Centro',
        ]);
        DB::table('recursos_humanos')->insert([
            'universidad_departamento_puesto_id' => '3',
            'presupuesto' => '13000',
            'nombre' => 'Carlos Fernando',
            'apellido_paterno' => 'Porras',
            'apellido_materno' => 'Lopez',
            'fecha_nacimiento' => '1997-07-07',
            'email' => 'porras_porras@hotmail.com',
            'direccion' => 'Prados verdes #15',
            'telefono' => '4435865546',
            'colonia' => 'Industrial',
        ]);
        DB::table('recursos_humanos')->insert([
            'universidad_departamento_puesto_id' => '4',
            'presupuesto' => '16000',
            'nombre' => 'Mauricio',
            'apellido_paterno' => 'Dominguez',
            'apellido_materno' => 'Gonzales',
            'fecha_nacimiento' => '1998-07-07',
            'email' => 'mau_diablo@hotmail.com',
            'direccion' => 'morelia',
            'telefono' => '4433683624',
            'colonia' => 'Centro',
        ]);
    }
}
