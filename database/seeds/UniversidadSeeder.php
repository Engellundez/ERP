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
            'nombre' => 'UNID Campus Morelia',
            'ciudad' => 'Morelia',
        ]);
        DB::table('universidads')->insert([
            'nombre' => 'UNID Ocolusen',
            'ciudad' => 'Morelia',
        ]);
    }
}
