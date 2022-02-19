<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string("first_name",50);
            $table->string("second_name",50)->nullable();
            $table->string("first_surname",50);
            $table->string("second_surname")->nullable();
            $table->string("cargo",30);
            $table->bigInteger('cedula');
            $table->bigInteger('telefono');
            $table->string("direccion",60);
            $table->bigInteger('fk_user')->nullable();
            $table->timestamps();
            $table->foreign('fk_user')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
