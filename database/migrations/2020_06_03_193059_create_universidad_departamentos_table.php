<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidad_departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('universidad_id');
            $table->unsignedBigInteger('departamento_id');

            $table->foreign('universidad_id')->references('id')->on('universidads')->onUpdate('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universidad_departamentos');
    }
}
