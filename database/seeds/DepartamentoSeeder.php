<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Recursos Humanos',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Finanzas',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Atención estudiantil',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administración',
        ]);
    }
}
