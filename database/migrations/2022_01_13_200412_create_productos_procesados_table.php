<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosProcesadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_procesados', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string("nombre",50);
            $table->bigInteger('precio');
            $table->string("descripcion");
            $table->bigInteger('fk_materias_primas')->nullable();
            $table->bigInteger('fk_recipientes')->nullable();
            $table->bigInteger('fk_complementos')->nullable();
            $table->timestamps();
            $table->foreign('fk_materias_primas')->references('id')->on('materias_primas');
            $table->foreign('fk_recipientes')->references('id')->on('recipientes');
            $table->foreign('fk_complementos')->references('id')->on('complementos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_procesados');
    }
}
