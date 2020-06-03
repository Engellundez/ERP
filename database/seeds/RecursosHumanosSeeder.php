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
            'entidad_id' => '16',
            'universidad_id' => '1',
            'departamento_id' => '2',
            'puesto_id' => '1',
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
    }
}
