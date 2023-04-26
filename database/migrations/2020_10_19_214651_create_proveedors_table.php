<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigoProveedor',20);
            $table->string('nombreProveedor',50);
            $table->string('direccionProveedor',150)->nullable();
            $table->string('telefonoProveedor',50)->nullable();
            $table->string('personaContactoProveedor',100)->nullable();
            $table->string('telefonoPersonaContactoProveedor',100)->nullable();  
            $table->string('correoPersonaContactoProveedor',100)->nullable();          
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
        Schema::dropIfExists('proveedors');
    }
}
