<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadDepartamentoPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidad_departamento_puestos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('universidad_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('puesto_id');

            $table->foreign('universidad_id')->references('id')->on('universidads')->onUpdate('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onUpdate('cascade');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universidad_departamento_puestos');
    }
}
