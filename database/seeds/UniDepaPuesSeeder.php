<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniDepaPuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universidad_departamento_puestos')->insert([
            'universidad_id' => '1',
            'departamento_id' => '1',
            'puesto_id' => '1',
        ]);
        DB::table('universidad_departamento_puestos')->insert([
            'universidad_id' => '1',
            'departamento_id' => '1',
            'puesto_id' => '2',
        ]);
        DB::table('universidad_departamento_puestos')->insert([
            'universidad_id' => '2',
            'departamento_id' => '2',
            'puesto_id' => '3',
        ]);
        DB::table('universidad_departamento_puestos')->insert([
            'universidad_id' => '2',
            'departamento_id' => '3',
            'puesto_id' => '4',
        ]);
        DB::table('universidad_departamento_puestos')->insert([
            'universidad_id' => '1',
            'departamento_id' => '4',
            'puesto_id' => '5',
        ]);
    }
}
