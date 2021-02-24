<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('docente_id');
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            $table->timestamps();

        $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
        $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
