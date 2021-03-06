<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
            'departamento_id'   => '1',
            'nombre'            => 'Maestro',
        ]);
        DB::table('puestos')->insert([
            'departamento_id'   => '2',
            'nombre'            => 'Rector',
        ]);
        DB::table('puestos')->insert([
            'departamento_id'   => '1',
            'nombre'            => 'Coordinador',
        ]);
        DB::table('puestos')->insert([
            'departamento_id'   => '3',
            'nombre'            => 'Director de finanzas',
        ]);
        DB::table('puestos')->insert([
            'departamento_id'   => '4',
            'nombre'            => 'Administrador',
        ]);
    }
}
