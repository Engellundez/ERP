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
            'nombre' => 'Maestro',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Rector',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Coordinador',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Director de finanzas',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Administrador',
        ]);
    }
}
