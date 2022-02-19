<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipientes', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string("nombre",50);
            $table->string("descripcion");
            $table->bigInteger('fk_propiedades_alimenticias')->nullable();
            $table->timestamps();
            $table->foreign('fk_propiedades_alimenticias')->references('id')->on('propiedades_alimenticias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipientes');
    }
}
