<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universidads')->insert([
            'entidad_id' => '16',
            'ciudad' => 'Morelia',
            'nombre' => 'UNID Campus Morelia',
        ]);
        DB::table('universidads')->insert([
            'entidad_id' => '16',
            'ciudad' => 'Morelia',
            'nombre' => 'UNID Ocolusen',
        ]);
        DB::table('universidads')->insert([
            'entidad_id' => '15',
            'ciudad' => 'Guadalajara',
            'nombre' => 'Unid Campus Guadalajara',
        ]);
    }
}
