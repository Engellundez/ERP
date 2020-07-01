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
            'universidad_id' => '1',
            'presupuesto' => '7000',
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
            'universidad_id' => '1',
            'presupuesto' => '7000',
            'nombre' => 'Mario Alberto',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Raya',
            'fecha_nacimiento' => '1993-05-18',
            'email' => 'Mario_alsr@hotmail.com',
            'direccion' => 'morelia',
            'telefono' => '4431732550',
            'colonia' => 'Centro',
        ]);
    }
}
