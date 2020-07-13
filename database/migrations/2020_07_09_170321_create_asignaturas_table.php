<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recursos_humanos_id');
            $table->string('nombre');
            $table->integer('semestre');
            $table->time('inicio_clase');
            $table->time('fin_clase');
            $table->string('dias_imparticion');
            $table->timestamps();

            $table->foreign('recursos_humanos_id')->references('id')->on('recursos_humanos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaturas');
    }
}
