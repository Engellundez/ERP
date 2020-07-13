<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
            'recursos_humanos_id'   => '1',
            'nombre'                => 'Programación Movil',
            'semestre'              => '9',
            'inicio_clase'          => '18:00',
            'fin_clase'             => '19:30',
            'dias_imparticion'      => 'L, X',
        ]);
        DB::table('asignaturas')->insert([
            'recursos_humanos_id'   => '2',
            'nombre'                => 'Sistemas ERP',
            'semestre'              => '9',
            'inicio_clase'          => '16:00',
            'fin_clase'             => '17:30',
            'dias_imparticion'      => 'L, X',
        ]);
        DB::table('asignaturas')->insert([
            'recursos_humanos_id'   => '3',
            'nombre'                => 'Desarrollo de Proyectos',
            'semestre'              => '9',
            'inicio_clase'          => '16:00',
            'fin_clase'             => '17:30',
            'dias_imparticion'      => 'M, J',
        ]);
        DB::table('asignaturas')->insert([
            'recursos_humanos_id'   => '3',
            'nombre'                => 'Seguridad Informatica',
            'semestre'              => '9',
            'inicio_clase'          => '18:00',
            'fin_clase'             => '19:30',
            'dias_imparticion'      => 'M',
        ]);
        DB::table('asignaturas')->insert([
            'recursos_humanos_id'   => '3',
            'nombre'                => 'Seguridad Informatica',
            'semestre'              => '9',
            'inicio_clase'          => '16:00',
            'fin_clase'             => '17:30',
            'dias_imparticion'      => 'V',
        ]);
    }
}
