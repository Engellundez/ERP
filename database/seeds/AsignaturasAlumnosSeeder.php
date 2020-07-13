<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturasAlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '1',
            'alumno_id'     => '1',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '2',
            'alumno_id'     => '1',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '3',
            'alumno_id'     => '1',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '4',
            'alumno_id'     => '1',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '5',
            'alumno_id'     => '1',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '1',
            'alumno_id'     => '2',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '2',
            'alumno_id'     => '2',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '3',
            'alumno_id'     => '2',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '4',
            'alumno_id'     => '2',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '5',
            'alumno_id'     => '2',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '1',
            'alumno_id'     => '3',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '2',
            'alumno_id'     => '3',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '3',
            'alumno_id'     => '3',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '4',
            'alumno_id'     => '3',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '5',
            'alumno_id'     => '3',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '1',
            'alumno_id'     => '4',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '2',
            'alumno_id'     => '4',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '3',
            'alumno_id'     => '4',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '4',
            'alumno_id'     => '4',
        ]);
        DB::table('asignatura_alumnos')->insert([
            'asignatura_id' => '5',
            'alumno_id'     => '4',
        ]);
    }
}
