<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string("first_name",50);
            $table->string("second_name", 50)->nullable();
            $table->string("first_surname",50);
            $table->string("second_surname",50)->nullable();
            $table->bigInteger('telefono');
            $table->string("direccion",60);
            $table->bigInteger('fk_empleados')->nullable();
            $table->bigInteger('fk_productos_procesados')->nullable();
            $table->bigInteger('fk_user')->nullable();
            $table->timestamps();
            $table->foreign('fk_user')->references('id')->on('users');
            $table->foreign('fk_productos_procesados')->references('id')->on('productos_procesados');
            $table->foreign('fk_empleados')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
