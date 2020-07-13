<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('universidad_id');
            $table->string('correo')->unique();
            $table->timestamps();


            $table->foreign('grupo_id')->references('id')->on('grupos')->onUpdate('cascade');
            $table->foreign('universidad_id')->references('id')->on('universidads')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
