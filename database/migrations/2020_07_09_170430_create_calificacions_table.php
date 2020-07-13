<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_asignatura_id');
            $table->integer('parcial1')->unsigned()->nullable();
            $table->integer('parcial2')->unsigned()->nullable();
            $table->integer('parcial3')->unsigned()->nullable();
            $table->integer('calificacion_final')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('alumno_asignatura_id')->references('id')->on('asignatura_alumnos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacions');
    }
}
