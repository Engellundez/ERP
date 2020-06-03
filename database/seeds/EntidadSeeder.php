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
            'nombreEntidad' => 'Aguascalientes',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Baja California',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Baja California Sur',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Campeche',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Chiapas',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Chihuahua',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Coahuila',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Colima',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Ciudad de México',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Durango',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Estado de México',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Guanajuato',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Guerrero',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Hidalgo',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Jalisco',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Michoacán',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Morelos',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Nayarit',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Nuevo León',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Oaxaca',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Puebla',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Querétaro',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Quintana Roo',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'San Luis Potosi',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Sinaloa',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Sonora',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Tabasco',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Tamaulipas',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Tlaxcala',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Veracruz',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Yucatán',
        ]);
        DB::table('entidads')->insert([
            'nombreEntidad' => 'Zacatecas',
        ]);
    }
}
