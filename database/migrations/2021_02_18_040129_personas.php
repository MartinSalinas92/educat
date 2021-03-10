<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('dni');
            $table->string('cuil');
            $table->char('sexo',9);
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('religion');
            $table->string('telefono');

            $table->bigInteger('legajo');
            $table->uuid('uuid');
            $table->string('email');
            $table->string('password');
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
        //
        Schema::dropIfExists('personas');
    }
}
