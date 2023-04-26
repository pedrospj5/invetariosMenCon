<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigoProducto',20);
            $table->string('nombreProducto',50);
            $table->string('presentacionProducto',150);
            $table->string('colorProducto',50);
            $table->decimal('precioMayorProducto',10,2);
            $table->decimal('precioFeriaProducto',10,2);  
            $table->decimal('precioTiendaProducto',10,2);
            $table->bigInteger('proveedor_id')->unigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');         
            $table->string('estado',50);
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
        Schema::dropIfExists('productos');
    }
}
