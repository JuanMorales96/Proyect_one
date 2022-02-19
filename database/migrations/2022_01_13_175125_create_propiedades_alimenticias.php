<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesAlimenticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades_alimenticias', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string("calorias",50);
            $table->string("grasas",50);
            $table->string("proteina",50);
            $table->string("calcio",50);
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades_alimenticias');
    }
}
