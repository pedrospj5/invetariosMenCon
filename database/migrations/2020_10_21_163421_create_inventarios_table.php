<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('producto_id')->unigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->bigInteger('sucursal_id')->unigned();
            $table->foreign('sucursal_id')->references('id')->on('sucursals');
            $table->bigInteger('ubicacion_id')->unigned();
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            $table->integer('cantidad');

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
        Schema::dropIfExists('inventarios');
    }
}
