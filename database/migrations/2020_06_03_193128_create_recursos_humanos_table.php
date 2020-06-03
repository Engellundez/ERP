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
            $table->unsignedBigInteger('entidad_id');
            $table->unsignedBigInteger('universidad_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('puesto_id');
            $table->string('presupuesto');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('direccion')->nullable();
            $table->string('telefono');
            $table->string('colonia');
            $table->timestamps();
            
            $table->foreign('entidad_id')->references('id')->on('entidads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('universidad_id')->references('id')->on('universidads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade')->onUpdate('cascade');
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
