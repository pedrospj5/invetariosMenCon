<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');            
                $table->date('fechaNacimiento')->nullable();
                $table->string('lugarNacimiento', 50)->nullable();
                $table->string('CI', 15)->nullable();
                $table->string('sexo',50)->nullable();
                $table->string('estadoCivil',50)->nullable();
                $table->string('telefono',50)->nullable();
                $table->string('estado',50)->nullable();
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
