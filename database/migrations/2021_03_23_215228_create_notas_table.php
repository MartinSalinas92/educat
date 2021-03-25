<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->char('notas1', 2);
            $table->char('notas2', 2);
            $table->char('notas3', 2);
            $table->char('notas4', 2);
            $table->float('promedio', 3,2);
            $table->string('estado');
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('taller_id');
            $table->unsignedBigInteger('materia_id');


            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('taller_id')->references('id')->on('tallers')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
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
        Schema::dropIfExists('notas');
    }
}
