<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            
            $table->Increments('id');
            $table->string('nombreSucursal',50)->nullable();
            $table->string('direccionSucursal',100)->nullable();
            $table->string('ciudadSucursal',50)->nullable();
            $table->string('telefonoSucursal',25)->nullable();
            $table->string('personaEncargadaSucursal',100)->nullable();           
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
        Schema::dropIfExists('sucursals');
    }
}
