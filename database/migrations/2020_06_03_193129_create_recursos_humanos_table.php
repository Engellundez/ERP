<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_humanos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('universidad_departamento_id');
            $table->unsignedBigInteger('departamento_puesto_id');
            $table->string('presupuesto');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('direccion')->nullable();
            $table->biginteger('telefono');
            $table->string('colonia');
            $table->timestamps();
            
            $table->foreign('universidad_departamento_id')->references('id')->on('universidad_departamentos')->onUpdate('cascade');
            $table->foreign('departamento_puesto_id')->references('id')->on('departamento_puestos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos_humanos');
    }
}
