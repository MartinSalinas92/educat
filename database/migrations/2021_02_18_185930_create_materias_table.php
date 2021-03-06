<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_materia');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('taller_id');



            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('taller_id')->references('id')->on('tallers')->onDelete('cascade');


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
        Schema::dropIfExists('materias');
    }
}
