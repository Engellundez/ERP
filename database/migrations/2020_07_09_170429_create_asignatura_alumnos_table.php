<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('alumno_id');
            $table->timestamps();


            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onUpdate('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignatura_alumnos');
    }
}
