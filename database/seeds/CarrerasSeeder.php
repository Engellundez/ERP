<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'nombre'    => 'Ingenieria de Tecnologias de la Información y Comunicación',
        ]);
        DB::table('carreras')->insert([
            'nombre'    => 'Derecho',
        ]);
        DB::table('carreras')->insert([
            'nombre'    => 'Turismo',
        ]);
        DB::table('carreras')->insert([
            'nombre'    => 'Administración',
        ]);
    }
}
