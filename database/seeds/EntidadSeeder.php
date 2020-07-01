<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entidads')->insert([
            'nombre' => 'Aguascalientes',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Baja California',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Baja California Sur',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Campeche',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Chiapas',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Chihuahua',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Coahuila',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Colima',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Ciudad de México',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Durango',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Estado de México',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Guanajuato',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Guerrero',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Hidalgo',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Jalisco',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Michoacán',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Morelos',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Nayarit',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Nuevo León',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Oaxaca',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Puebla',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Querétaro',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Quintana Roo',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'San Luis Potosi',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Sinaloa',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Sonora',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Tabasco',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Tamaulipas',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Tlaxcala',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Veracruz',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Yucatán',
        ]);
        DB::table('entidads')->insert([
            'nombre' => 'Zacatecas',
        ]);
    }
}
